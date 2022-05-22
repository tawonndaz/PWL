<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "crud_pdo";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($nama, $alamat, $logo)
    {
        $data = $this->db->prepare('INSERT INTO sekolah (nama,alamat,logo) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama);
        $data->bindParam(2, $alamat);
        $data->bindParam(3, $logo);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM sekolah");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM sekolah where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$nama,$alamat,$logo){
        $query = $this->db->prepare('UPDATE sekolah set nama=?,alamat=?,logo=? where id=?');
        
        $query->bindParam(1, $nama);
        $query->bindParam(2, $alamat);
        $query->bindParam(3, $logo);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM sekolah where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

}
?>