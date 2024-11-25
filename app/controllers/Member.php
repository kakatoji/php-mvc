<?php

class Member extends Controller
{
  public function index()
  {
    $data["title"] = "Halaman member";
    $this->view("home/template/h_header", $data);
    $this->view("home/template/h_navbar");
    $this->view("member/index");
    $this->view("home/template/h_footer");
  }
  public function dashboard()
  {
    $data["title"] = "Dasboard Member";
    $data["data"] = $this->model("userModel")->getAllMember();
    $this->view("home/template/h_header", $data);
    $this->view("home/template/h_navbar");
    $this->view("member/dashboard", $data);
    $this->view("home/template/h_footer");
  }
  public function detail($id)
  {
    $data["title"] = "Detail Member";
    $data["data"] = $this->model("userModel")->getMemberById($id);
    $this->view("home/template/h_header", $data);
    $this->view("member/detail", $data);
    $this->view("home/template/h_footer");
  }
  public function tambah()
  {
    if ($this->model("userModel")->tambahMember($_POST) > 0) {
      Flasher::setFlash("berhasil", "di tambah kan", "success");
      header("Location: " . BASEURL . "/member/dashboard");
      exit();
    } else {
      Flasher::setFlash("gagal", "di tambah kan", "warning");
      header("Location: " . BASEURL . "/member/dashboard");
      exit();
    }
  }
  public function hapus($id)
  {
    if ($this->model("userModel")->hapusDataMember($id) > 0) {
      Flasher::setFlash("berhasil", "di hapus", "success");
      header("Location: " . BASEURL . "/member/dashboard");
      exit();
    } else {
      Flasher::setFlash("gagal", "di hapus", "warning");
      header("Location: " . BASEURL . "/member/dashboard");
      exit();
    }
  }
  public function getEdit()
  {
    echo json_encode($this->model("userModel")->getMemberById($_POST["id"]));
  }
  public function edit()
  {
    if ($this->model("userModel")->editDataMember($_POST) > 0) {
      Flasher::setFlash("berhasil", "di edit", "success");
      header("Location: " . BASEURL . "/member/dashboard");
      exit();
    } else {
      Flasher::setFlash("gagal", "di edit", "warning");
      header("Location: " . BASEURL . "/member/dashboard");
      exit();
    }
  }
  public function cari()
  {
    $data["title"] = "Dasboard Member";
    $data["data"] = $this->model("userModel")->cariDataMember();
    $this->view("home/template/h_header", $data);
    $this->view("home/template/h_navbar");
    $this->view("member/dashboard", $data);
    $this->view("home/template/h_footer");
  }
}
