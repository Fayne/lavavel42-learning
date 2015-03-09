<?php

use App\Classes\ImportCsv;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class CsvImportCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'paxifi:import-tax';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from CSV file to database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $filePath = $this->argument('file-path');
        $table = $this->option('table');
        $memoryLimit = $this->option('memory');
        $truncate = (bool)$this->option('truncate');

        $csvImport = new ImportCsv($filePath, $table, $memoryLimit, $truncate);

        $count = $csvImport->import($memoryLimit);

        $this->info(sprintf("%s records have been inserted into table %s", $count, $table));
    }

    protected function getArguments()
    {
        return array(
            array('file-path', null, InputOption::VALUE_REQUIRED, 'A csv file path.', null),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            array('table', null, InputOption::VALUE_OPTIONAL, 'Import table name.', 'taxes'),
            array('memory', null, InputOption::VALUE_OPTIONAL, 'This is PHP memory limit.', '256M'),
            array('truncate', null, InputOption::VALUE_OPTIONAL, 'If true, this table will be truncated.', false),
        );
    }

}
