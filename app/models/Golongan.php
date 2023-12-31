<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{
    public function tampil()
    {
        $query = "SELECT * FROM tb_golongan";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }
    public function simpan()
    {
        $gol_kode = $_POST['gol_kode'];
        $gol_nama = $_POST['gol_nama'];
        $created_at = $_POST['created_at'];

        $sql = "INSERT INTO tb_golongan (gol_kode,gol_nama,created_at) VALUES (:gol_kode,:gol_nama,:created_at)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_kode", $gol_kode);
        $stmt->bindParam(":gol_nama", $gol_nama);
        $stmt->bindParam(":created_at", $created_at);

        $stmt->execute();
    }
    public function edit($id)
    {
        $query = "SELECT * FROM tb_golongan WHERE gol_id = :gol_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":gol_id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $gol_kode = $_POST['gol_kode'];
        $gol_nama = $_POST['gol_nama'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];
        $gol_id = $_POST['gol_id'];

        $sql = "UPDATE tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama, created_at=:created_at, updated_at=:updated_at WHERE gol_id=:gol_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_kode", $gol_kode);
        $stmt->bindParam(":gol_nama", $gol_nama);
        $stmt->bindParam(":created_at", $created_at);
        $stmt->bindParam(":updated_at", $updated_at);
        $stmt->bindParam(":gol_id", $gol_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_id", $id);
        $stmt->execute();
    }
}
