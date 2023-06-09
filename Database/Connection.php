<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Connection
{
    /**
     * Database Cradentials 
     */

    private $host = '127.0.0.1:3308';
    private $user = 'root';
    private $password = 'bs09Btcs183@';
    private $database = 'php_oop_db';

    private $mysqli = '';
    private $result = [];
    private $conn = false;

    public function __construct()
    {
        /**
         * Creating opject of mysqli class & passing data to it
         * Syntex : new mysqli('host','user','password','database');
         */
        if (!$this->conn) {
            $this->mysqli =  new mysqli($this->host, $this->user, $this->password, $this->database);
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            } else {
                $this->conn = true;
                return true;
            }
        }
    }

    /**
     * Creating a new resource
     */

    public function create($table, $data = [])
    {
        if ($this->tableExists($table)) {
            /**
             * Seprated Keys as Column & Value as Values for columns
             */
            $columns = implode(', ', array_keys($data));
            $values = implode("','", $data);

            $insert = "INSERT INTO $table ($columns) VALUES ('$values')";

            if ($this->mysqli->query($insert)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            echo false;
        }
    }

    /**
     * Viewing a resource
     */

    public function view()
    {
    }
    public function viewAll()
    {
        $viewAll = "select * from users";
        $select = $this->mysqli->query($viewAll);
        if ($select) {
            return $select->fetch_all(MYSQLI_ASSOC);
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }

    /**
     * Update a resource
     */
    public function update($table, $data = [], $id = null)
    {
        if ($this->tableExists($table)) {
            //print_r($data);
            $set = [];

            foreach ($data as $key => $value) {
                $set[] = "$key = '$value'";
            }

            //print_r($set);
            $update = "update users set " . implode(",", $set) . "where id = $id";
            if ($this->mysqli->query($update)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Delete a resource
     */

    public function delete($table, $id)
    {
        if ($this->tableExists($table)) {
            $delete = "delete from $table";
            if ($id != null) {
                $delete .= " where  id = $id";
            }
            if ($this->mysqli->query($delete)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }
    /**
     * Destroying connection after performing task
     */

    private function tableExists($table)
    {
        /**
         * SQL command to check if table exists
         */
        $getTable = "show tables from $this->database like '$table'";

        /**
         * Running the command
         */

        $checkTable = $this->mysqli->query($getTable);

        if ($checkTable) {
            if ($checkTable->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table . " doesn't exists");
                return false;
            }
        }
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = [];
        return $val;
    }
    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }
}



/**
 * Setting DB cradintials
 */

// $server = "127.0.0.1:3308";
// $user = 'root';
// $password = 'bs09Btcs183@';
// $database = 'php_oop_db';

// /**
//  * Creating opject of mysqli class & passing data to it
//  * Syntex : new mysqli('host','user','password','database');
//  */


// $conn = new mysqli($server, $user, $password, $database);

// return $conn;
// /**
//  * Check if connection is ok or not
//  */

// if ($conn->connect_error) {
//     die('Connection failed : ' . $conn->connect_error);
// }
// /**
//  * Selecall rows from a table
//  */

// $sql = "SELECT * FROM  `users`";
// $result = $conn->query($sql);

// /**
//  * Looping through the returned data;
//  */
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<br>ID : " . $row['id'] . " Name : " . $row['name'] . "<br>";
//     }
// } else {
//     echo "<br>No records found<br>";
// }
