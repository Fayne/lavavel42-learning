<?php

/**
 * Class AccountController
 */
class AccountController extends BaseController
{

    public function register()
    {
        $this->view('accounts.register');
    }

    /**
     * Register a new Account holder.
     *
     * @return Response
     */
    public function create()
    {
        try {
            $data = Input::all();

            with(new RegisterAccountValidator())->validate($data);

            // Create the Account
            $account = Sentry::createUser($data);

            // Make the Account as a member
            $account->account_id = $account->id;
            $account->save();

            // Find the Account group
            $accountGroup = Sentry::findGroupByName('Account');

            // Add to Account group
            $account->addGroup($accountGroup);

            Event::fire('account.registered', $account);

            return Response::json([

                "email" => $account->email,

                "first_name" => $account->first_name,

                "last_name" => $account->last_name,

            ], 201);

        } catch (ValidationException $e) {

            return $this->respondWithError('ValidationException', $e->getErrors(), 406);

        } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {

            return $this->respondWithError('LoginRequiredException', $e->getMessage(), 406);

        } catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {

            return $this->respondWithError('PasswordRequiredException', $e->getMessage(), 406);

        } catch (Cartalyst\Sentry\Users\UserExistsException $e) {

            return $this->respondWithError('UserExistsException', $e->getMessage(), 406);

        } catch (Exception $e) {

            return $this->respondWithError('SystemError', $e->getMessage(), 500);

        }
    }
} 