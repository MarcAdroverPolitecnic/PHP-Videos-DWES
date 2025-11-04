<?php

use Core\Authenticator;
use Core\ValidationException;
use Http\Forms\LoginForm;
use Core\Session;

try{

    $form = LoginForm::validate($attributes = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);

} catch(ValidationException $exception){
    Session::flash('errors', $form->errors());
    Session::flash('old', [
        'email' =>$attributes['email']
    ]);

    return redirect('/login');
}

if((new Authenticator())-> attempt($attributes['email'], $attributes['password'])){
    redirect('/');
}

$form->error('email', 'no matching account for that email and password');

return redirect('/login');





