<?php
    $error_login = '';
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

    function surplus_Amount($bank){
        $surplus = 0;
        if(isset($bank)){
            foreach ($bank as $key => $value){
                $surplus = $surplus + $value['amount'];
            }
        }
        return $surplus;
    }

    function check_Limit_Amount($list_account, $accountNo, $amount, $sur){  
        foreach ($list_account as $key => $value){
            if($accountNo == $value -> getAccountNo()){
                if($amount > $sur){
                    return true;
                }
            }
        } 
        return false;
    }
 

?>