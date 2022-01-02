<?php
    class Ajax extends Controller{
        public $UserModel;

        public function __construct() {
            $this->UserModel = $this->getModel('UserModel');
        }

        public function checkUserName()
        {
            $un = $_POST['un'];

            echo $this->UserModel->checkUserName($un);  
            // echo $un;
        }

        public function Click()
        {
            $nclick = $_POST['nclick'];

            echo $this->ProductModel->adClick($nclick);  
            // echo $un;
        }
    }
?>