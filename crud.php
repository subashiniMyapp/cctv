<?php
include_once "db-config.php";

class Quote extends Database
{
    public $dbconn;
    private $tbl = "quote_tbl";

    public function __construct()
    {
        $conn_var = new Database();
        $this->dbconn = $conn_var->db();
    }

    public function save($formData)
    {
        if ($formData != '') {

            $sql = "INSERT INTO " . $this->tbl . " (";
            $sql .= implode(",", array_keys($formData)) . ') VALUES (';
            $sql .= "'" . implode("','", array_values($formData)) . "')";
            //echo $sql;
            $runSql = $this->dbconn->executeQuery($sql);
            if ($runSql) {
                echo "Your Data uploaded Succesfully";
                //return true;
            } else {
                //echo 'error on db';
                return false;
            }
        }
    }

    // public function __construct()
    // {
    //     $connect = new DB();
    //     $this->dbConn = $connect->db_connection();
    // }

}
