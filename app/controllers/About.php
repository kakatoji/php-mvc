<?php
class About extends Controller
{
  public function index()
  {
    $data["title"] = "ABOUT ME";
    $data["nama"] = "Aang saputra";
    $this->view("home/template/h_header", $data);
    $this->view("home/template/h_navbar");
    $this->view("pages/index",$data);
    $this->view("home/template/h_footer");
  }
  public function pages()
  {
    $data["title"] = "ABOUT ME";
    $data["nama"] = "Aang saputra";
    $this->view("home/template/h_header", $data);
    $this->view("home/template/h_navbar");
    $this->view("pages/pages");
    $this->view("home/template/h_footer");
  }
}
