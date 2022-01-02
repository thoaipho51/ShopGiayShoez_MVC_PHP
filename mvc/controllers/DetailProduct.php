<?php
    class DetailProduct extends Controller{

        
        public $ProductModel;
        public $UserModel;

        public function __construct() {
            $this->ProductModel = $this->getModel('ProductModel');
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show($id = -1)
        {   


            // $sql ="SELECT * FROM product WHERE id_product = '$id'"; 
            // $result = $this->ProductModel->ExecuteSigleQR($sql);
            
            $result = $this->ProductModel->getProductSigle($id);
            $SanPhamLienQuan = $this->ProductModel->SanPhamLienQuan($result['id_brand']);
            
            $usr = $this->UserModel->ValidateToken();
            if ($usr != null) {
                if ($result != false) {
                    $this ->getView('master1', [
                        'Page'=>'detailproduct',
                        'user'=>$usr,
                        'ProductDetail'=>$result,
                        'ProductRelated'=>$SanPhamLienQuan
                        // 'ProductOther'=> $resultOther
                    ]);
                }else {

                }
            }else{
                if ($result != false) {
                    $this ->getView('master1', [
                        'Page'=>'detailproduct',
                        'ProductDetail'=>$result,
                        'ProductRelated'=>$SanPhamLienQuan
                    ]);
                }else {
                    
                }
            }
                    
        }
    }
?>