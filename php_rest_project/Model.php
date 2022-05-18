<?php

include_once "./Database.php";
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['crud_req'] == "signup")
signup($conn)

if($_SERVER['REQUEST_METHOD'] == "GET")
logout($conn)

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['crud_req'] == "login")
login($conn)

function signup($conn){
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $rPwd = $_POST['rPwd'];

    if(empty($fName) || empty($lName) || empty($userName) || empty($email) || empty($pwd) || empty($rPwd))
    {
        http_response_code(400);
        echo "All fields are mandatory!";
        exit();
    }
    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        http_response_code(400);
        echo "Invalid Email Adress!";
        exit();
    }
    if($pwd != $rPwd){
        http_response_code(400);
        echo "Inconsistent Password!";
        exit();
    }
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $rPwd = $pwd;

    $sql = "Insert into users (first_name, last"


}
function login($conn){}
function signout($conn){}