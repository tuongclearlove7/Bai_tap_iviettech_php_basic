<?php 


    class account{

        private $accountNo, $ownerName, $amount, $accountType, $password;
        
        public function __construct($accountNo, $ownerName, $amount, $accountType, $password){

            $this -> accountNo = $accountNo;
            $this -> ownerName = $ownerName;
            $this -> amount = $amount;
            $this -> accountType = $accountType;
            $this -> password = $password;
           
        
        }

        public function setAccountNo($value){
            $this -> accountNo = $value;
        }

        public function getAccountNo(){

            return $this->accountNo;
       }
        public function setOwnerName($value){
            $this -> ownerName = $value;
        }

        public function getOwnerName(){

            return $this->ownerName;
       }

        public function setAmount($value){
            $this -> amount = $value;
        }

        public function getAmount(){

            return $this->amount;
       }

        public function setAccountType($value){
            $this -> accountType = $value;
        }

        public function getAccountType(){
            return $this->accountType;
       }

        public function setPassword($value){
            $this -> password = $value;
        }

        public function getPassword(){
            return $this->password;
       }

    
    }

    //tạo lớp student db 

    class accountDB{   
        public static function get_all_account(){
            global $bankDB;               
            $result = [];//Khai báo biến mảng kết quả để lưu trữ danh sách các đối tượng sinh viên
            foreach ($bankDB as $key => $value) {
                $ac = new account(
                $value['accountNo'],
                $value['ownerName'],
                $value['amount'],
                $value['accountType'],
                $value['password'],
            );
                $result[] = $ac;
            }
            return $result;
        }    
    }

?>


































