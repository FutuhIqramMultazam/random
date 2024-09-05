<?php
class Home extends Controller
{
    public function index()
    {

        $data["judul"] = "Home page";
        $data["nama"] = $this->model("User_model")->getName();

        $this->view("layout/header", $data);
        $this->view("home/index", $data);
        $this->view("layout/footer");
    }
}
