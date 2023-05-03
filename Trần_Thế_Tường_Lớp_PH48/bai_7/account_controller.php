<?php
//Khởi động session
$lifetime = 10*24*60*60;
session_set_cookie_params($lifetime,'/');
session_start();
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
        //xóa session
        unset($_SESSION['account']);   
        unset($_SESSION['deposit']);   
        unset($_SESSION['surplus_amount']); 
        //Quay về trang login
        include('./view/login.php');
        break;

    case 'view_account':
        global $surplus_amount;
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
        if(isset($_SESSION['deposit'])){
            //tính số tiền dư trong tk
            $surplus_amount = $your_amount - surplus_Amount($_SESSION['deposit']);
            $_SESSION['surplus_amount'][] = ['surplus_amount'=>$surplus_amount];
        } 
        $list_account = accountDB::get_all_account();
        include('./view/view_account.php');
        break;
    case 'transfer':
        //chuyển tiền
        $list_account = accountDB::get_all_account();
        $bank = ['accountNo'=> filter_input(INPUT_POST,'accountNo'),
            'password'=> filter_input(INPUT_POST,'password'),
            'amount'=> filter_input(INPUT_POST,'amount'),
            'sendAccountNo'=> filter_input(INPUT_POST,'sendAccountNo'),
        ];
        $accountNo = $bank['accountNo'];
        $password = $bank['password'];
        $amount = $bank['amount'];
        $sendAccountNo = $bank['sendAccountNo'];
        //kiểm tra nếu số tiền chuyển nhiều hơn số tiền dư thì giao dịch thất bại
        if(check_Limit_Amount($list_account, $accountNo, $amount, $_SESSION['your_amount'])){
            $error_transfer = $amount ." nhiều hơn số tiền dư ". $_SESSION['your_amount'];
            include('./view/atm.php');
        }
        else{
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
                }else{
                    if(check_accountNo($_SESSION['account'],$accountNo,$password)){  
                        $success = 'chuyển tiền thành công!. Click deposit để xem hóa đơn!';
                        //lưu số tiền chuyển và số tk vào session
                        $_SESSION['deposit'][] = [ 
                            'sendAccountNo'=> $bank['sendAccountNo'],
                            'amount'=> $bank['amount'], 
                        ];
                        include('./view/atm.php');
                    }
                    else{
                        $fail = 'bạn đã nhập sai mật khẩu!. Chuyển tiền thất bại!';
                        include('./view/atm.php');
                    }
                }
            }
        }
        break;
    case 'deposit':
        
        include('./view/deposit.php');
        break;
    case 'clear_deposit':
        //xóa hóa đơn chuyển tiền 
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
