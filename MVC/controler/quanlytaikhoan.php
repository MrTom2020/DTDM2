<?php
    class quanlytaikhoan extends Controller
    {
        public $a;
        public $vithanhvien;
        public function __construct()
        {
            $this->a = $this->model("taovi");
            $this->vithanhvien = $this->model("vicuathanhvien");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"Quanlytaikhoan",
        ]);
    }
    public function ql()
    {
        if(isset($_POST["vitien"]))
        {
            $this->view("tienich",[
                "Page"=>"vi",
            ]);
        }
        if(isset($_POST["danhsachvi"]))
        {
            $this->view("tienich",[
                "Page"=>"listwallet",
                "listvi"=>$this->a->dsvi()
            ]);
        }
        if(isset($_POST["danhsachtk"]))
        {
            $this->view("tienich",[
                "Page"=>"danhsachtktv",
                "listvi"=>$this->a->dstv()
            ]);
        }
        if(isset($_POST["capnhatvi"]))
        {
            $this->view("tienich",[
                "Page"=>"capnhatthongtinvi",
                "listvi"=>$this->a->danhsachvi()
            ]);
        }
        if(isset($_POST["capnhatthongtincn"]))
        {
            $this->view("tienich",[
                "Page"=>"capnhatthongtincanhan",
                "thongtin"=>$this->a->thongtinnguoidung()
            ]);
        }
        if(isset($_POST["cd"]))
        {
            $this->view("tienich",[
                "Page"=>"vithanhvien",
                "vtv"=>$this->vithanhvien->vithanhvien()
            ]);
        }
    }
}
    
?>