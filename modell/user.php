<?php

class User{
    private $id;
    private $username;
    private $pasword;
    private $email;

    public function set_user($id, $conn){
        //lekerjuk
        $sql = " SELECT F_Id, username, pasword, email FROM felhasznalok ";
        $sql .= " WHERE F_Id = $id ";
        $result = $conn-> query($sql);
        if ($conn->query($sql)) {
        if ($result->num_rows > 0 ){
           $row = $result->fetch_assoc();
           $this-> id = $row['F_Id'];
           $this-> username = $row['username'];
           $this-> pasword = $row['pasword'];
           $this-> email = $row['email'];
        }

    }
         else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    public function get_id() {
        return $this->id;
    }
    public function get_username() {
        return $this->username;
    }
    public function get_pasword() {
        return $this->pasword;
    }
    public function get_email() {
        return $this->email;
    }
    public function userslist($conn){
        $lista = array();
        $sql = "SELECT F_Id FROM felhasznalok";
        if($result = $conn-> query($sql)){
        if ($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()){
                $lista[]= $row['F_Id'];
            }
        }
    }
 
    return $lista;
}
}
//$tanulo->get_id();
//$tanulo->get_nev();
//$tanulo->get_sor();
//$tanulo->get_oszlop();
//$tanulo->get_jelszo();
//$tanulo->get_felhasznalo();

?>