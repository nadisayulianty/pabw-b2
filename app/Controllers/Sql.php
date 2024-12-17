<?php

namespace App\Controllers;

use App\Libraries\MyCustomErrorHandler;
use App\Models\UsersModel;
use CodeIgniter\Debug\ExceptionHandler;
use Config\Database;

class Sql extends BaseController
{
    protected $db;
    protected  static $impostor,$fileName;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function impersonate()
    {
        $sqlPaths = array_filter(glob( APPPATH . 'Database/SQL/' . '*'), 'is_dir');

        foreach ($sqlPaths as $path) {
            $sqlFiles = glob($path . '/*.sql');

            foreach ($sqlFiles as $file) {
                $sqlPath = basename($path) . '/' . basename($file);

                if ($this->hasRun($sqlPath)) continue;

                $sql = file_get_contents($file);


                // EXECPTION HANDLER
                $owner = explode("/",$sqlPath);
                $_SERVER['impostor'] =  $owner[0];
                $_SERVER['file'] = $owner[1];

                $this->db->query($sql);
                $this->markAsRun($sqlPath);

            }
        }

       return "Execution Sql script Successfuly >_<" ;
    }

    private function hasRun($sqlPath)
    {
        return $this->db->table('migrations')->where('class', $sqlPath)->countAllResults() > 0;
    }

    private function markAsRun($sqlPath)
    {
        $this->db->table('migrations')->insert([
            'class'     => $sqlPath,
            'time'      => time(),
            'group'     => "Impersonate-SQL",
            'namespace' => 'Impersonate',
            'batch'     => 99,
            'version'   => date("Y-m-d:his")
        ]);
    }


}