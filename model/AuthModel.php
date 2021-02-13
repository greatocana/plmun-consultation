<?php

    class AuthModel {

        public $id;
        private $conn;

        public function __construct($db) {
            $this->conn = $db;
        }

        function login() { 
            $query='SELECT * FROM tbl_students WHERE stud_no=:stud_no';

            $this->stud_no=htmlspecialchars(strip_tags($this->stud_no));

            $exec = $this->conn->prepare($query);
            $exec->bindParam(':stud_no', $this->stud_no);
            $exec->execute();
            return $exec;
        }


        function register() {

            // if($this->existing_user()){
            //     return false;
            // }

            $query = "INSERT INTO tbl_students SET 
                password=:password,
                stud_no=:stud_no,
                Fname=:Fname,
                Mname=:Mname,
                Lname=:Lname,
                course=:course,
                year=:year";
                
            $exec = $this->conn->prepare($query);
         
            $this->password=htmlspecialchars(strip_tags($this->password));
            $this->stud_no=htmlspecialchars(strip_tags($this->stud_no));
            $this->Fname=htmlspecialchars(strip_tags($this->Fname));
            $this->Mname=htmlspecialchars(strip_tags($this->Mname));
            $this->Lname=htmlspecialchars(strip_tags($this->Lname));
            $this->course=htmlspecialchars(strip_tags($this->course));
            $this->year=htmlspecialchars(strip_tags($this->year));

            $exec->bindParam(':password',$this->password);
            $exec->bindParam(':stud_no',$this->stud_no);
            $exec->bindParam(':Fname',$this->Fname);
            $exec->bindParam(':Mname',$this->Mname);
            $exec->bindParam(':Lname',$this->Lname);
            $exec->bindParam(':course',$this->course);
            $exec->bindParam(':year',$this->year);

            if($exec->execute()){
                return true;
            }

            return false;

        }

        function existing_user() {

            $query = 'SELECT * FROM tbl_students WHERE stud_no=:stud_no';

            $exec = $this->conn->prepare($query);
            $exec->bindParam(":stud_no", $this->stud_no);
            $exec->execute();
            
            if($exec->rowCount() > 0){
                return true;
            }else{
                return false;
            }
            
        }
    }
?>