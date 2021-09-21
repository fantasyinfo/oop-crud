<?php

class DBController
{
    private $dbHost = 'localhost';
    private $dbUser = 'root';
    private $dbPassword = 'mysql';
    private $dbName = 'oop-crud';
    private $table;

    public $conn;
    public $status = [];

    // connection
    function __construct()
    {
        $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);

        if ($this->conn->connect_error) {
            echo "Your connection is not connected due to an connection error" . $this->conn->connect_error;
        } else if ($this->conn) {
            //echo "DataBase Connected";
        }
        return $this->conn;
    }

    // get all data
    function getAllDataAtOnce($table)
    {
        $this->table = $table;
        $sql = "select * from $this->table";
        $result = $this->conn->query($sql);
        while ($row[] = $result->fetch_assoc()) {
            if ($row != '') {
                $this->status['status'] = 200;
                $this->status['msg'] = "Data Found";
                $this->status['data'] = $row;
            } else {
                $this->status['status'] = 404;
                $this->status['msg'] = "Data Not Found";
            }
        }
        return json_encode($this->status);
    }

    //get single data
    function getSingleData($table, $arr)
    {
        $this->table = $table;
        foreach ($arr as $key => $value) {
            $keyArr[] = $key;
            $valueArr[] = $value;
        }
        $keyArr = implode(',', $keyArr);
        $valueArr = implode("','", $valueArr);
        $valueArr = "'" . $valueArr . "'";
        $sql = "select * from $this->table where $keyArr = $valueArr";
        if ($row = $this->conn->query($sql)) {
            $row = $row->fetch_assoc();
            if ($row != '') {
                $this->status['status'] = 200;
                $this->status['msg'] = "Data Found";
                $this->status['data'] = $row;
            } else {
                $this->status['status'] = 404;
                $this->status['msg'] = "Data Not Found";
            }
        } else {
            $this->status['status'] = 404;
            $this->status['msg'] = "Data Not Found";
        }
        return json_encode($this->status);
    }
    // insert data
    function insertData($table, $arr)
    {
        $this->table = $table;
        foreach ($arr as $key => $values) {
            $fieldArr[] = $key;
            $valueArr[] = $values;
        }

        $fieldArr = implode(",", $fieldArr);
        $valueArr = implode("','", $valueArr);
        $valueArr = "'" . $valueArr . "'";
        $sql = "insert into $this->table ($fieldArr) values ($valueArr)";
        if ($this->conn->query($sql)) {
            $this->status['status'] = 200;
            $this->status['msg'] = "Data Inserted Successfull";
        } else {
            $this->status['status'] = 404;
            $this->status['msg'] = "Something Went Wront Data Did Not Inserted";
        }
        return json_encode($this->status);
    }

    // delete the data
    function deleteData($table, $arr)
    {
        $this->table = $table;
        foreach ($arr as $key => $value) {
            $keyArr[] = $key;
            $valueArr[] = $value;
        }
        $keyArr = implode(',', $keyArr);
        $valueArr = implode("', '", $valueArr);
        $valueArr = "'" . $valueArr . "'";
        $sql = "delete from $this->table where $keyArr = $valueArr";
        if ($this->conn->query($sql)) {
            $this->status['status'] = 200;
            $this->status['msg'] = "Data Deleted Successfull";
        } else {
            $this->status['status'] = 404;
            $this->status['msg'] = "Data Did Not Deleted Due To An Error";
        }
        return json_encode($this->status);
    }

    function updateData($sql)
    {
        if ($this->conn->query($sql)) {
            $this->status['status'] = 200;
            $this->status['msg'] = "Data Updated Successfully";
        } else {
            $this->status['status'] = 404;
            $this->status['msg'] = "Data Not Updated Due to Some Error Successfull";
        }
        return json_encode($this->status);
    }










    // get print function

    function prx($arr)
    {
        echo "<pre>";
        print_r($arr);
        return $arr;
    }
}