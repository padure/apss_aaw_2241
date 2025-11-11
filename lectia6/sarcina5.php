<?php
class User{
    public function greet(){
        echo"Salut sunt User!";
    }
}
class Admin extends User{
     public function greet(){
        echo"Salut sunt Admin!";
    }
}
$user=new User();
$user->greet();
$admin=new Admin();
$admin->greet();
?>