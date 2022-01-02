<?php
    class ProductModel extends DB {


        public function getAllProduct(){   
            $qr = "SELECT * FROM product ORDER BY product . gia ASC";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }
        
        public function getProductOfset($page){
            $qr = "SELECT * FROM product ORDER BY product.gia ASC LIMIT $page, 12";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }

        public function getProductByIdBrand($idLoai)
        {
            $sql ="SELECT * FROM product WHERE id_brand = '$idLoai'";
            $Result = mysqli_query($this->conn, $sql);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }


        public function getBrand()
        {
            $sql ="SELECT * FROM brand";
            $Result = mysqli_query($this->conn, $sql);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }

        public function ExecuteSigleQR($sql)
        {
           
            if ($result = mysqli_query($this->conn, $sql)) {

                return $row = mysqli_fetch_array($result, 1);

            }
            return false;
        }

        public function getProductSigle($id_product)
        {
            if ($id_product > 0) {
                $this->adClick($id_product);
            }
            $sql ="SELECT * FROM product WHERE id_product = '$id_product'";
            if ($result = mysqli_query($this->conn, $sql)) {

                return $row = mysqli_fetch_array($result, 1);

            }
            return false;
        }

        public function SanPhamLienQuan($idBrand)
        {
            $qr ="SELECT * FROM product WHERE id_brand = '$idBrand' ORDER BY RAND() limit 4";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }
        public function getProductHot()
        {
            $qr ="SELECT * FROM product ORDER BY numclick DESC LIMIT 8";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }

        public function getRDProduct_8()
        {
            $qr ="SELECT * FROM product ORDER BY RAND() limit 8";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }
        public function getRDProduct_10()
        {
            $qr ="SELECT * FROM product ORDER BY RAND() limit 10";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }

        public function adClick($id_product)
        {   
            $numclick = "SELECT numclick FROM product WHERE id_product = $id_product";
            $row = mysqli_fetch_array(mysqli_query($this->conn, $numclick), 1);
            $click = $row['numclick'];

            $sql = "UPDATE product SET numclick = $click + 1  WHERE id_product = $id_product";
            mysqli_query($this->conn, $sql);
        }
        
    }
    
?>