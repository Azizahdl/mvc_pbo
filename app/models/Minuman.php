<?php

namespace App\Models;

use App\Core\Model;

class Minuman extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_minuman";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama_minuman = $_POST['nama_minuman'];
        $jenis_minuman = $_POST['jenis_minuman'];

        $sql = "INSERT INTO tb_minuman
            SET nama_minuman=:nama_minuman, jenis_minuman=:jenis_minuman";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_minuman", $nama_minuman);
        $stmt->bindParam(":jenis_minuman", $jenis_minuman);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_minuman WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama_minuman = $_POST['nama_minuman'];
        $jenis_minuman = $_POST['jenis_minuman'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_minuman
          SET nama_minuman=:nama_minuman, jenis_minuman=:jenis_minuman WHERE id=:id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_minuman", $nama_minuman);
        $stmt->bindParam(":jenis_minuman", $jenis_minuman);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }
    public function delete($id)
    {
         $sql = "DELETE FROM tb_minuman WHERE id=:id";
         $stmt = $this->db->prepare($sql);

         $stmt->bindParam(":id", $id);
         $stmt->execute();
    }
}
