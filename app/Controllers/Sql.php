<?php

namespace App\Controllers;

use App\Models\UsersModel;
use Config\Database;

class Sql extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function impersonate()
    {
        $sqlPaths = array_filter(glob( APPPATH . 'Database/SQL/' . '*'), 'is_dir');

        foreach ($sqlPaths as $path) {
            $teamName = basename($path);
            $sqlFiles = glob($path . '/*.sql');

            foreach ($sqlFiles as $file) {
                $sqlPath = $teamName . '/' . basename($file);

                if ($this->hasRun($sqlPath)) continue;

                $sql = file_get_contents($file);

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