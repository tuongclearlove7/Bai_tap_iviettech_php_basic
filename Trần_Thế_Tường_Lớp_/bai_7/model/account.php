<?php
    $error_login = '';
    //Định nghĩa hàm kiểm tra tài khoản có hay không
    function check_login($bankDB, $accountNo,$password){
        
        foreach ($bankDB as $key => $value) {
            if($accountNo==$value['accountNo'] && $password == $value['password']){
                return true;    
            }
        }
        
        return false;
    }

    function check_accountNo($bankDB, $accountNo,$password){
        
        foreach ($bankDB as $key => $value) {
            if($accountNo==$value['accountNo'] && $password == $value['password']){
                return true;    
            }
            
        }
        
        return false;
    }
    //Kiểm tra id có trong session không

?>