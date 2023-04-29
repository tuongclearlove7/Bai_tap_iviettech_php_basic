<?php
//Khởi động session
$lifetime = 10*24*60*60;
session_set_cookie_params($lifetime,'/');
session_start();
//Session viết đầu tiên
include('./model/database.php');
include('./model/account.php');
include('./model/account_db.php');
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'home';
    }
}
//Nếu không tồn tại session tức người dùng chưa đăng nhập
if(!isset($_SESSION['account'])){
    $action='checklogin';
} 
$list_account = accountDB::get_all_account();
$account_no = '';
$account_type = '';
$your_amount = '';
$owner_name = '';
$success = '';
$fail = '';
$valid = '';
$valid_amount = '';
$valid_sendAccountNo = '';
$error_transfer = '';
$amount_send = 0;

switch ($action) {
    case 'home':

        $list_account = accountDB::get_all_account();
        //unset($_SESSION['account']);
       // print_r($list_account[0]);
        
        include('./view/atm.php');
        break;      
        
    case 'checklogin':
        $accountNo = filter_input(INPUT_POST,'accountNo'); 
        $password = filter_input(INPUT_POST,'password');          
        //Nếu tài khoản nhập vào đúng
        if(check_login($bankDB,$accountNo,$password)){     
            //Tạo và Lưu session
            $_SESSION['account'] = [
            ['accountNo'=>$accountNo,'password'=>$password,]
            ];           
            $list_account = accountDB::get_all_account();
            include('./view/atm.php');     
        }
        else{
            include('./view/login.php');
        }
        
        break;   
    case 'logout':
        unset($_SESSION['account']);   
        unset($_SESSION['deposit']);   
        unset($_SESSION['amount_send']);       
        //Quay về trang login
        include('./view/login.php');
        break;

    case 'view_account':
        // lấy thông tin account vừa đăng nhập vào
        foreach ($list_account as $key => $value){
            if($value -> getAccountNo() == $_SESSION['account'][0]['accountNo']){
                $account_no = $value -> getAccountNo();
                $owner_name = $value -> getOwnerName();
                $account_type = $value -> getAccountType();
                $your_amount = $value -> getAmount();
                $_SESSION['your_amount'] = $value -> getAmount();
            }
        }

        $list_account = accountDB::get_all_account();
        include('./view/view_account.php');
        break;
    case 'transfer':
        //chuyển tiền
        $list_account = accountDB::get_all_account();
        $bank = [
            ['accountNo'=> filter_input(INPUT_POST,'accountNo'),
            'password'=> filter_input(INPUT_POST,'password'),
            'amount'=> filter_input(INPUT_POST,'amount'),
            'sendAccountNo'=> filter_input(INPUT_POST,'sendAccountNo'),
            ]
        ];
        $accountNo = $bank[0]['accountNo'];
        $password = $bank[0]['password'];
        $amount = $bank[0]['amount'];
        $sendAccountNo = $bank[0]['sendAccountNo'];
        //nếu số tiền chuyển nhiều hơn số tiền gốc thì giao dịch thất bại
        foreach ($list_account as $key => $value){
            if($accountNo == $value -> getAccountNo()){
                if($amount > $value -> getAmount()){
                    $error_transfer =  "số tiền " .$amount ." nhiều hơn với số tiền " .$value->getAmount() ."<br> hiện có trong tài khoản của bạn vui lòng nhập lại!";
                    unset($_SESSION['deposit']);  
                }
            }
        } 
        //check nhập vào có hợp lệ hay không
        if(!$amount && !$sendAccountNo){
            $valid = 'vui lòng nhập vào';
            include('./view/atm.php');
        }
        else{ 
            if(!$amount){
                $valid_amount =  "vui lòng nhập vào số tiền , số tk bạn muốn chuyển!";
                include('./view/atm.php');
            }
            else if(!$sendAccountNo){
                 $valid_sendAccountNo =  "vui lòng nhập vào số tài khoản bạn muốn chuyển!";
                 include('./view/atm.php');
            }
            else{
                //kiểm tra số tk và mk
                if(check_accountNo($_SESSION['account'],$accountNo,$password)){  

                    $success = 'chuyển tiền thành công!. Click deposit để xem hóa đơn!';
                    $_SESSION['amount_send'] = $amount;
                    $_SESSION['deposit'] = [ 
                                    $bank[0]['amount'], 
                                    $bank[0]['sendAccountNo'],
                            ];
                    include('./view/atm.php');
                }
                else{
                    $fail = 'bạn đã nhập sai mật khẩu!. Chuyển tiền thất bại!';
                    include('./view/atm.php');
                }
            }
        }
        break;
    case 'deposit':
        
        include('./view/deposit.php');
        break;
    case 'clear_deposit':
        //xóa hóa đơn chuyển tiền
        unset($_SESSION['deposit']);  
        include('./view/atm.php');
        break;
    case 'clear_session_amount':
        // unset($_SESSION['money']);  
        // unset($_SESSION['amount_send']);
        include('./view/atm.php');
        break;
    default:
        break;
}
