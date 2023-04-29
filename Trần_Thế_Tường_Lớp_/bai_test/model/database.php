<?php 

$users = [

        ['username'=>'admin','password'=>'12345'],
        ['username'=>'tuong','password'=>'12345'],
        ['username'=>'thao','password'=>'12345'],
        ['username'=>'mai','password'=>'12345']
];


$books = [

    ['book_id'=>0,'name'=>'tuong','gioitinh'=>'nam', 'email'=>"lol00sever@gmail.com",'image'=>'user.png', 'address'=>'dak lak'],
    ['book_id'=>1,'name'=>'mai','gioitinh'=>'nu', 'email'=>"tranthimai1331998@gmail.com",'image'=>'user_nu.png', 'address'=>'dak lak'],
    ['book_id'=>2,'name'=>'thao','gioitinh'=>'nu', 'email'=>"hpthao@gmail.com",'image'=>'user_nu.png', 'address'=>'dak lak'],
    ['book_id'=>3,'name'=>'cuc','gioitinh'=>'nu', 'email'=>"hpthao@gmail.com",'image'=>'user_nu.png', 'address'=>'dak lak'],
    ['book_id'=>4,'name'=>'quang','gioitinh'=>'nam', 'email'=>"hpthao@gmail.com",'image'=>'user.png', 'address'=>'dak lak'],
      
];


if(isset($_SESSION['books'])){
    //gán session cho mảng students
    $books = $_SESSION['books'];
}else{
    $books =[];

}


?>





































