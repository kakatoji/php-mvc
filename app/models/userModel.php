<?php

class userModel
{
  private $table = "tbl_member";
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function getAllMember()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
  public function getMemberById($id)
  {
    $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }
  public function tambahMember($data)
  {
    $query =
      "INSERT INTO tbl_member (username,email,jabatan) VALUES (:username,:email,:jabatan)";
    $this->db->query($query);
    $this->db->bind("username", $data["username"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("jabatan", $data["jabatan"]);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function hapusDataMember($id)
  {
    $query = "DELETE FROM tbl_member WHERE id=:id";
    $this->db->query($query);
    $this->db->bind("id", $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function editDataMember($data)
  {
    $query = "UPDATE tbl_member SET 
      username = :username,
      email = :email,
      jabatan = :jabatan
      WHERE id = :id";
    $this->db->query($query);
    $this->db->bind("username", $data["username"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("jabatan", $data["jabatan"]);
    $this->db->bind("id", $data["id"]);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function cariDataMember()
  {
    $keyword = $_POST["keyword"];
    $query = "SELECT * FROM tbl_member WHERE username LIKE :keyword";
    $this->db->query($query);
    $this->db->bind("keyword", "%$keyword%");
    return $this->db->resultSet();
  }
}
