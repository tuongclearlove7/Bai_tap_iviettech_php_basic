<?php 


    class mybook{

        private $book_id, $name, $author, $publishyear, $production;
        
        public function __construct($book_id, $name, $author, $publishyear, $production){

            $this -> book_id = $book_id;
            $this -> name = $name;
            $this -> author = $author;
            $this -> publishyear = $publishyear;
            $this -> production = $production;
            
        
        }

        public function setBook_id($value){
            $this -> book_id = $value;
        }

        public function getBook_id(){

            return $this->book_id;
       }
        public function setName($value){
            $this -> name = $value;
        }

        public function getName(){

            return $this->name;
       }

        public function setAuthor($value){
            $this -> author = $value;
        }

        public function getAuthor(){

            return $this->author;
       }

        public function setPublishyear($value){
            $this -> publishyear = $value;
        }

        public function getPublishyear(){
            return $this->publishyear;
       }

        public function setProduction($value){
            $this -> production = $value;
        }

        public function getProduction(){
            return $this->production;
       }

      
    }


    //tạo lớp student db 

    class bookDB{   
        public static function get_all_book(){
            global $books;               
            $result = [];//Khai báo biến mảng kết quả để lưu trữ danh sách các đối tượng sinh viên
            foreach ($books as $key => $value) {
                $st = new mybook(
                $value['book_id'],
                $value['name'],
                $value['author'],
                $value['publishyear'],
                $value['production'],
            );
                $result[] = $st;
            }
            return $result;
        }    
    }

?>


































