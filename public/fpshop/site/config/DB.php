<?php

Class DB
{

    private $username='root',
    $password='',
    $localhost='localhost',
    $dbname='new_fp';
    public $conn=NULL; 
    public function connect_DB()
    {
        $this->conn=mysqli_connect($this->localhost,$this->username,$this->password,$this->dbname);
        mysqli_set_charset($this->conn,'UTF8');
    }

    public function close_DB()
    {
        if($this->conn)
        {
            mysqli_close($this->conn);
        }
    }

    public function get_All_Row($sql=NULL)
    {
        if($this->conn)
        {
            $data=array();
            $query=mysqli_query($this->conn,$sql);
            if($query)
            {
                while ($row=mysqli_fetch_assoc($query)) {
                    $data[]= $row;
                }
            }
            return $data;
        }           
    }
    public function get_Row($sql=null)
    {
        if($this->conn)
        {
            $query = mysqli_query($this->conn,$sql);
            if ($query) {
                $row = mysqli_fetch_row($query);
            }
            else
            {
                echo 'Tạch';
            }
            return $row;
        }
    }
    public function count_Rows($sql=null)
    {
        if($this->conn)
        {
             $query = mysqli_query($this->conn,$sql);
            if ($query){
                $row = mysqli_num_rows($query);
            }
            else
            {
                echo 'Tạch';
            }
            return $row;
        }
    }
    public function ExecuteNonQuery($sql=NULL)
    {
        if($this->conn)
        {
            mysqli_query($this->conn,$sql);
        }
    }
}
?>
