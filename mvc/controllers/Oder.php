<?php
    class Oder extends Controller{
    
    public $UserModel;    
    public $OrderModel;

    public function __construct() {
        $this->OrderModel = $this->getModel('OrderModel');
        $this->UserModel = $this->getModel('UserModel');
    }
        
    
    public function Show()
        {
            $this ->getView('master1', [
                'Page'=>'sigin'
            ]);
        }
    
    public function Checkout()
        {
            //  Lấy dữ liệu từ form người dùng nhập
                $usr = $this->UserModel->ValidateToken();
                if ($usr != null) {
                    if (isset($_POST['checkout'])) {
                        $userNameout = $_POST['username'];
                        $addressout = $_POST['address'];
                        $emailout = $_POST['email'];
                        $phoneout = $_POST['phone'];    
                        $Tong = $_SESSION['tong'];
                        // Insert vào DB
                        $result = $this->OrderModel->InsertCheckout( $userNameout, $addressout,  $emailout,  $phoneout, $Tong );
                        if ($result) {
                            //Lấy dữ liệu mới nhất
                            $rq = $this->OrderModel->getIdNew();
                            //Lấy data hoadon hiện tại
                            $dataHD = $this->OrderModel->getHoaDon($rq['id_hoadon']);

                            session_destroy();
                            // Show Thành Công hay Thất Bại
                            $this ->getView('master1', [
                                'Page'=>'checkout',
                                'user'=>$usr,
                                'showcheckout'=>$rq,
                                'datahoadon'=> $dataHD
                            ]);
                        }else{

                        }
                        
                    }

                }else{
                    
                    echo '<script language="javascript">alert("Hãy đăng nhập để đặt hàng"); window.location="/shoeZ/sigin";</script>';
                  
                }

                
            

        }

        
    }
  
?>
