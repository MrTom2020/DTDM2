<?php
    class cnthongtinvi extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("capnhatthongtinvi");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"Quanlytaikhoan",
        ]);
    }
    public function cnttv()
    {
        if(isset($_POST["dongycn"]))
        {
            $idvi = isset($_POST['idvicn']) ? $_POST['idvicn']:"";
           $tenvi = isset($_POST['tenvicn']) ? $_POST['tenvicn']:"";
           $tien = isset($_POST['tiencn']) ? $_POST['tiencn']:"";
           $loaivi = isset($_POST['loaivicn']) ? $_POST['loaivicn']:"";
           $this->a->cn($idvi,$tenvi,$tien,$loaivi);
           $this->view("tienich",[
            "Page"=>"Quanlytaikhoan",
        ]);
        }
    }
}
    
?>