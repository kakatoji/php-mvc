<?php

class Home extends Controller
{
  public function index()
  {
    $data["title"] = "MAY blogs";
    $data["nama"] = $this->model("userModel")->getUser();
    $this->view("home/template/h_header", $data);
    $this->view("home/template/h_navbar");
    $this->view("home/index",$data);
    $this->view("home/template/h_footer");
  }
}
