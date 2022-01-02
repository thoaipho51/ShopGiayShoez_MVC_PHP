<?php
    class ReviewModel extends DB {


        public function InsertReview($user_name, $user_rating, $user_review, $datetime, $id_product)
        {
            $sql = "INSERT INTO review(user_name, user_rating, user_review, datetime, id_product) 
                VALUES ('$user_name', '$user_rating', '$user_review', '$datetime', '$id_product')";

            if (mysqli_query($this->conn, $sql)) {
                return true;
            }
            return false;

        }
        
    }
    
?>