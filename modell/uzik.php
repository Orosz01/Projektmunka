<?php
class Uzik {
    private $uzi_id;
    private $F_Id;
    private $uzi;
    private $username;
 
    public function set_uzi($id, $conn) {

        $sql = "SELECT uzi_id,felhasznalok.F_Id,uzi,username FROM uzenetek INNER JOIN felhasznalok ON uzenetek.F_Id=felhasznalok.F_Id ";
        $sql .= " WHERE uzi_id = $id ";
        $result = $conn->query($sql);
        if ($conn->query($sql)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->username = $row['username'];
                $this->F_Id = $row['F_Id'];
                $this->uzi_id = $row['uzi_id'];
                $this->uzi = $row['uzi'];
                
            }
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function get_username() {
        return $this->username;
    }
    public function get_F_Id() {
        return $this->F_Id;
    }
    public function get_uzi() {
        return $this->uzi;
    }
    public function get_uzi_id() {
        return $this->uzi_id;
    }
    public function uzikle($conn) {
        $lista = array();
        $sql = "SELECT uzi_id FROM uzenetek";
        if($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    $lista[] = $row['uzi_id'];
                }
            }
        }
        return $lista;
    }   
}
?>