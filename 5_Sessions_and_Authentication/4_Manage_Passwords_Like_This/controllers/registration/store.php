<?php

use Core\Database;
use Core\App;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

//valaidate the form inputs
$errors = [];
if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}

if(!Validator::string($password, 7, 255)){
    $errors['password'] = 'Please provide a valid email password (between 7 and 255 chars';
}

if(!empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = APP::resolve(Database::class);

//chech if the account already exists
$user = $db ->query('select * from users where email = :email', [
    'email' => $email
]) -> find();

if($user){
    //then someone with that email already exists and has an account
    //if yes, redirect to a login page
    header('location: /');
    exit();

} else{
    $db ->query('INSERT INTO users(email, password) VALUES (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    //mark that the user has logged in
    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}

    //if yes, redirect to a login page
    //if not, save one to the database, and then log the user in , and redirect
