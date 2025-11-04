<?php

use Core\Authenticator;
use Core\ValidationException;
use Http\Forms\LoginForm;
use Core\Session;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator())-> attempt($attributes['email'], $attributes['password']);

if(!$signedIn){
    $form->error('email', 'no matching account for that email and password')
        ->throw();
}

redirect('/');




