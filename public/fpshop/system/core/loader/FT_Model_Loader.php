<?php
    Class FT_Model_Loader
    {
            
        private $username='root',
        $password='',
        $localhost='localhost',
        $dbname='fp';
        public $conn=NULL; 
        public $data=NULL;
        public function Connect_DB()
        {
            $this->conn=mysqli_connect($this->localhost,$this->username,$this->password,$this->dbname);
            mysqli_set_charset($this->conn, 'UTF-8');
        }

        public function Close_DB()
        {
            if($this->conn)
            {
                mysqli_close($this->conn);
            }
        }

        public function Get_All_Row($sql=NULL)
        {
            if($this->conn)
            {
            
                $query=mysqli_query($this->conn,$sql);
                if($query)
                {
                    while ($row=mysqli_fetch_assoc($query)) {
                        $data []= $row;
                    }
                }
                return $data;
            }           
        }

    }

?>