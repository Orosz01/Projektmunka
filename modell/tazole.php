<?php
class Tazo {
    private $Termek_azonosito; 
    private $Termek_nev;
    private $username;
    private $Ar;
    private $K_id;
    private $kep;
    private $id;
    private $main_kat;
 
    public function set_tazo($id, $conn) {

        $sql = "SELECT Termek_azonosito,Termek_nev,username,Ar,K_id,kep,id,main_kat FROM tazok INNER JOIN felhasznalok ON tazok.F_Id=felhasznalok.F_Id
        INNER JOIN Termekek ON Termekek.T_id=tazok.Termek_azonosito";
        $sql .= " WHERE id = $id ";
        $result = $conn->query($sql);
        if ($conn->query($sql)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->Termek_azonosito = $row['Termek_azonosito'];
                $this->Termek_nev = $row['Termek_nev'];
                $this->username = $row['username'];
                $this->Ar = $row['Ar'];
                $this->K_id = $row['K_id'];
                $this->kep = $row['kep'];
                $this->id = $row['id'];
                $this->main_kat = $row['main_kat'];
            }
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    

    public function get_Termek_azonosito() {
        return $this->Termek_azonosito;
    }
    public function get_Termek_nev() {
        return $this->Termek_nev;
    }
    public function get_username() {
        return $this->username;
    }
    public function get_Ar() {
        return $this->Ar;
    }
    public function get_K_id() {
        return $this->K_id;
    }
    public function get_kep() {
        return $this->kep;
    }
    public function get_id() {
        return $this->id;
    }
    public function get_main_kat() {
        return $this->main_kat;
    }
    public function tazole($conn) {
        $lista = array();
        $sql = "SELECT id FROM tazok ORDER BY Termek_nev";
        if($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    $lista[] = $row['id'];
                }
            }
        }
        return $lista;
    }   
}
?>