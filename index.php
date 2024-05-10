<?php 

require "db.php";


$db = new db("localhost","root","","backend2023","employee");
// $db->insert([
// "name"=>"Ali",
// "email"=>"ww@ww.coc",
// "password"=>12345
// ])->excute();

// echo "<pre>";
// print_r($db->select()->where("email","=","ww@ww.coc")->Andwhere("name","=","Ali")->get());

// $db->update([
//     "name" => "tamer",
//     "email" => "haye@d.com",
//     "password" => 45687
// ])->where("id", "=", "3")->excute();




$db->select()
->join('employee', 'students.id = employee.students_id')
->where('name.column', '=', 'Ali')
->excute();




// class user {

//     public $con;

//     function connecttion (){
//         $con = mysqli_connect("localhost" , "root" , "" , "backend2024");
//     }
    
//     public function insert($data){
        
//     }
// }
// $u = new user;
// $u->insert([
// 'name' => 'moahmed',
// 'email' => 'mna@mb.com',
// 'password' => 123,

// ]);













// class User {

//     private $con;

//     function __construct(){
//         $this->connecttion();
//     }

//     function connecttion (){
//         $this->con = mysqli_connect("localhost", "root", "", "backend2024");
//         if (!$this->con) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
//     }
    
//     public function insert($data){
//     //     $name = $data['name'];
//     //     $email = $data['email'];
//     //     $password = $data['password'];

//     //     $query = "INSERT INTO student (name, email, password) VALUES ('$name', '$email', '$password')";
        
//     //     if (mysqli_query($this->con, $query)) {
//     //         echo "New record created successfully";
//     // }

//         $key = array_keys($data);
//         $key = implode("," ,$key);

//         $values = "";
//         foreach($data as $value){
//             if(is_string($value)){
//                 $values.= " '$value',";
//             }else{
//                 $values.= " '$value'";
//             }
//         }
//         $values = rtrim($value,",");
//         mysqli_connect($this->con, "INSERT INTO `student` ($key) VALUES ($values)");
//     }





// //     public function update($data){
// //     }
// // }
// }



// $user = new User;
// $user->insert([
//     'name' => 'Ahmed',
//     'email' => 'Ana@mb.com',
//     'password' => 543,
// ]);


// class User {

//     private $con;

//     function __construct(){
//         $this->connection();
//     }

//     function connection (){
//         $this->con = mysqli_connect("localhost", "root", "", "backend2024");
//         if (!$this->con) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
//     }
    
//     public function insert($data){
//         $keys = array_keys($data);
//         $keys = implode(",", $keys);

//         $values = "";
//         foreach($data as $value){
//             if(is_string($value)){
//                 $values .= " '$value',";
//             }else{
//                 $values .= " $value,";
//             }
//         }
//         $values = rtrim($values, ",");

//         $query = "INSERT INTO student ($keys) VALUES ($values)";
        
//         if (mysqli_query($this->con, $query)) {
//             echo "New record created successfully";
//         } else {
//             echo "Error: " . $query . "<br>" . mysqli_error($this->con);
//         }
//     }

//     public function update ($data , $condation){
//         $row = "";
//         foreach($data as $key => $value){
//             $row .= " `$key` = `$value`,";
//         }
//         $row = rtrim($row , ",");
//         mysqli_query($this->con , "UPDATE `student` SET $row $condation");
//     }

//     public function delete ($condation) {
        
//         mysqli_query($this->con," DELETE FROM  `student`  $condation");
//     }

// }

// $user = new User;
// // $user->insert([
// //     'name' => 'Mohamed',
// //     'email' => 'mna@mb.com',
// //     'password' => 123, 
// // ]);


// // $user->update([
// //     'name' => '1',
// //     'email' => '1na@mb.com',
// //     'password' => 543, 
// // ],"WHERE  id =1");


// $user->delete(
// "WHERE  id =19");








// interface dml {
//     public function insert();
//     public function update();
//     public function delete();
// }



// interface dql {
//     public function select();
// }



// class users implements dml,dql {
//     public function insert()
//     {
        
//     }

//     public function update()
//     {
        
//     }

//     public function delete()
//     {
        
//     }

//     public function select()
//     {
        
//     }
    
// }


// chaining method 
// class Calculator {
//     private $result;

//     public function __construct($initialValue) {
//         $this->result = $initialValue;
//     }

//     public function add($value) {
//         $this->result += $value;
//         return $this; 
//     }

//     public function subtract($value) {
//         $this->result -= $value;
//         return $this; 
//     }

//     public function multiply($value) {
//         $this->result *= $value;
//         return $this; 
//     }

//     public function getResult() {
//         return $this->result;
//     }
// }

// // Example usage of method chaining
// $calculator = new Calculator(10);
// $result = $calculator->multiply(2)->subtract(3)->getResult();
// echo $result; // Output: 24

// 

