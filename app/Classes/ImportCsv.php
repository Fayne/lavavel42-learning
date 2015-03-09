<?php namespace App\Classes;

use League\Csv\Reader;
use DB;

class ImportCsv
{
    /**
     * @var
     */
    private $csv;

    /**
     * @var string
     */
    private $table;

    /**
     * @var
     */
    private $memoryLimit;

    /**
     * @var
     */
    private $truncate;


    function __construct($csv, $table, $memoryLimit, $truncate)
    {
        $this->csv = $csv;
        $this->table = $table ?: 'members';
        $this->memoryLimit = $memoryLimit;
        $this->truncate = $truncate;
    }

    /**
     * Get data from CSV file and store in database
     */
    public function import()
    {
        ini_set('memory_limit', $this->memoryLimit);

        if ($this->truncate) {
            DB::table($this->table)->truncate();
        }

        $reader = Reader::createFromPath($this->csv);

        // First row of CSV file should be header
        $header = $reader->fetchOne();

        // Get all data without header
        // According to the documentation, offset should be 1, but first row will be passed.
        $data = $reader->setOffset(0)->fetchAssoc();

        array_map(function ($row) use ($header) {
            DB::table($this->table)->insert($row);
        }, $data);

        return count($data);
    }
}