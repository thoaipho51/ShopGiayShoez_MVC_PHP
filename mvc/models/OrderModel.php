<?php
    class OrderModel extends DB {


        public function InsertCheckout($userNameout, $addressout, $emailout, $phoneout, $Tong)
        {
            $sql = "INSERT INTO hoadonshoez 
            (id_hoadon, ten_khachhang, diachi, email_Khach, sodienthoai, tonghoadon) 
            VALUES (null, '$userNameout', '$addressout', '$emailout', '$phoneout', '$Tong')";
            if (mysqli_query($this->conn, $sql)) {
                return true;
            }
            return false;
        }
        
        public function getAllCheckout(){   
            $qr = "SELECT * FROM hoadonshoez";
            $Result = mysqli_query($this->conn, $qr);
    
            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
    
        }
        public function getIDNew(){   
            $qr = "SELECT MAX( id_hoadon ) AS id_hoadon FROM hoadonshoez;";
            $Result = mysqli_query($this->conn, $qr);
            while($row = mysqli_fetch_array($Result, 1)){
                
                return  $row;
            }
    
        }
        
        public function getHoaDon($hoadon)
        {
            
          
            $qr = "SELECT * FROM hoadonshoez WHERE id_hoadon = $hoadon ";
            
            $Result = mysqli_query($this->conn, $qr);
    
            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
             
            }
            return  $data;
        }
   
        
    }
    
?>