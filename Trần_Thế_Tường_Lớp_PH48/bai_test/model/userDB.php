<?php 
 function check_login($users, $username,$password){
    $check = false;
    foreach ($users as $key => $value) {
        if($username==$value['username'] && $password == $value['password']){
            $check = true;
            break;      
        }
    }
    return $check;
}

function checksession($session, $id){
    foreach ($session as $key => $value) {
        if($value['id']==$id){
            return true;
        }
    }
    return false;
}

?>

































