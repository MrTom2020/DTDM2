<?php
     class Ajax extends Controller
   {
       public $modelcon;
       public function __construct()
       {
          $this->modelcon = $this->model("modelcon");
       }
       function SayHi()
       {
        $this->view("main",[
            "Page"=>"main",
        ]);
       }
       public function checkuse()
       {
            $un =  isset($_POST["un"]) ? $_POST["un"]:0;
            $us = isset($_POST['useName']) ? $_POST['useName']:"";
            $pw = isset($_POST['usePassword']) ? $_POST['usePassword']:"";
            $kq = $this->modelcon->t($us,$pw);
            
            if($kq == 1 && isset($_POST['btnLogin']))
            {
                $_SESSION['ten'] = $us;
                $this->view("main",[
                             "Page"=>"main",]);
            }
            if($kq == 5 && isset($_POST['btnLogin']))
            {
                $_SESSION['ten'] = $us;
                $this->view("Admin",[
                                "Page"=>"HomeAdmin",
                                "Page1"=>"index",
                                "dsnd"=>$this->modelcon->ds()
                            ]);
            }
            //echo $this->modelcon->checkus($un);
            // if (isset($_POST['btnLogin']))
            // {
            //     $name = isset($_POST['useName']) ? $_POST['useName']:"";
            //     $password = isset($_POST['usePassword']) ? $_POST['usePassword']:"";
            //     if(!$name && !$password)
            //     {
            //         $this->view("main",[
            //             "Page"=>"main"
            //         ]);
            //     }
            //     else
            //     {
            //         $this->view("Admin",[
            //             "Page"=>"HomeAdmin",
            //             "Page1"=>"index"
            //         ]);
            //     }
            // }
            if (isset($_POST['signup']))
            {
                $this->view("tintuc",[
                    "Page"=>"formsigup"
                ]);
            }
            // if (isset($_POST['qll']))
            // {
            //     $this->view("tintuc",[
            //         "Page"=>"tienich"
            //     ]);
            // }
            // if(isset($_POST["admin"]))
            // {
            //     $this->view("Admin",[
            //         "Page"=>"HomeAdmin",
            //         "Page1"=>"index"
            //     ]);
            // }
       }
    }
?>