<?php
    class Quanlynguoidung extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("Qlnd");
        }
    public function SayHi()
    {
        $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"index"
        ]);
    }
    public function kpdlnd()
    {
        if(isset($_POST["kp"]))
        {
            echo 'e';
        }
    }
}
    
?>