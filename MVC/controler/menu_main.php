<?php
    class menu_main extends Controller
    {
        public $modelcon;
        public function __construct()
        {
          $this->modelcon = $this->model("modelcon");
        }
        public function SayHi()
         {
            $this->view("tintuc",[
                "Page"=>"gioithieu"
            ]);
      }
        public function chuyentrang()
        {
            if (isset($_POST['gt']))
            {
                $this->view("tintuc",[
                    "Page"=>"main"
                ]);
            }
            if(isset($_POST['gt1']))
            {
                $this->view("main",[
                    "Page"=>"main",
                ]);
            }
            if(isset($_POST['gt2']))
            {
                $this->view("tintuc",[
                    "Page"=>"Themtaikhoanquanly"
                ]);
            }
            if(isset($_POST['gt3']))
            {
                $this->view("tintuc",[
                    "Page"=>"Nhapthemkhoanthuchi"
                ]);
            }
            if(isset($_POST['gt4']))
            {
                $this->view("tintuc",[
                    "Page"=>"Nangcaptaikhoan"
                ]);
            }
            if(isset($_POST['gt5']))
            {
                $k2 = $this->modelcon->tongtien();
                $k1 =$this->modelcon->tongtienc();
                $this->view("tintuc",[
                    "Page"=>"Baocaokhoanchi",
                    "Page1"=>"baocaochi",
                    "Page2"=>"chart_pie",
                    "listvi"=>$this->modelcon->danhsachvi(),
                    "bd"=>$k1 + $k2
                ]);
            }
            if(isset($_POST['gt12']))
            {
                $k2 = $this->modelcon->tongtien();
                $k1 =$this->modelcon->tongtienc();
                $this->view("tintuc",[
                    "Page"=>"Baocaokhoanchi",
                    "Page1"=>"baocaothu",
                    "Page2"=>"chart_thu",
                    "listvi"=>$this->modelcon->danhsachvi(),
                    "bd"=>$k1 + $k2
                ]);
            }
            if(isset($_POST['gt13']))
            {
                $k2 = $this->modelcon->tongtien();
                $k1 =$this->modelcon->tongtienc();
                $this->view("tintuc",[
                    "Page"=>"Baocaokhoanchi",
                    "Page1"=>"baocaodautu",
                    "Page2"=>"chart_dt",
                    "listvi"=>$this->modelcon->danhsachvi(),
                    "bd"=>$k1 + $k2
                ]);
            }
            if(isset($_POST['gt6']))
            {
                $this->view("tintuc",[
                    "Page"=>"Quanlytaikhoan"
                ]);
            }
            if(isset($_POST['gt7']))
            {
                $this->view("tintuc",[
                    "Page"=>"congdong"
                ]);
            }
            if(isset($_POST['gt8']))
            {
                $this->view("tintuc",[
                    "Page"=>"thongbaochung",
                    "tbc"=>$this->modelcon->thongbaochungus()
                ]);
            }
            if(isset($_POST['gt11']))
            {
                $this->view("tintuc",[
                    "Page"=>"thongbaorieng",
                    "tbc"=>$this->modelcon->thongbaoriengus()
                ]);
            }
            if(isset($_POST['gt9']))
            {
                $this->view("tintuc",[
                    "Page"=>"tintuc"
                ]);
            }
            if(isset($_POST['gt10']))
            {
                $this->view("tintuc",[
                    "Page"=>"tienich"
                ]);
            }
            if(isset($_POST['timkiem']))
            {
                $this->view("tintuc",[
                    "Page"=>"timkiem"
                ]);
            }

        }
    }
?>