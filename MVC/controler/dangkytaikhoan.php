<?php
    class dangkytaikhoan extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modeldktk");
        }
    public function SayHi()
    {
        $this->view("login",[
            "Page"=>"login",
        ]);
    }
    public function kiemtra()
    {
        $un = isset($_POST['un']) ? $_POST['un']:"";
        $un1 = isset($_POST['un']) ? $_POST['un']:"";
        $kkk = '123';
       echo $kq = $this->a->kt($un,$kkk);
    }
    public function khachdangkytaikhoan()
    {
        if(isset($_POST["dangky"]))
        {
            $hoten = isset($_POST["hoten"]) ? $_POST["hoten"]:"";
            $ngaysinh = isset($_POST["ngaysinh"]) ? $_POST["ngaysinh"]:"";
            $mk = isset($_POST["mk"]) ? $_POST["mk"]:"";
            $xnmk = isset($_POST["xnmk"]) ? $_POST["xnmk"]:"";
            $dc = isset($_POST["dc"]) ? $_POST["dc"]:"";
            $email = isset($_POST["email"]) ? $_POST["email"]:"";
            $sdt = isset($_POST["sdt"]) ? $_POST["sdt"]:"";
            $cauhoibimat = isset($_POST["cauhoibimat"]) ? $_POST["cauhoibimat"]:"";
            $cautraloi = isset($_POST["cautraloi"]) ? $_POST["cautraloi"]:"";
            $ngaytg =  date("Y/m/d") . "  " . date("h:i:sa");
           $kk  = date("Y/m/d",strtotime($ngaysinh));
            $this->a->checkus($hoten, $mk,$ngaysinh,$dc,$email,$cauhoibimat,$sdt,$cautraloi,$ngaytg);
            $this->view("main",[
                "Page"=>"main"
            ]);
        }
    }
}
    
?>