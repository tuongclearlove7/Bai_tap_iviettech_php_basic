<?php 


$list_users = [

    ['firstname'=>'tuong','lastname'=>'Tran', 'email'=>"lol00sever@gmail.com",],
    ['firstname'=>'mai','lastname'=>'Tran', 'email'=>"tranthimai1331998@gmail.com",],
    ['firstname'=>'thao','lastname'=>'Ho', 'email'=>"hpthao@gmail.com",],
    ['firstname'=>'cuc','lastname'=>'Nguyen', 'email'=>"hpthao@gmail.com",],
    ['firstname'=>'quang','lastname'=>'Tran', 'email'=>"hpthao@gmail.com",],
      
];

//print_r($list_users);
if(isset($_SESSION['list_users'])){
    
    $list_users = $_SESSION['list_users'];
}else{
    $list_users =[];

}










?>





































