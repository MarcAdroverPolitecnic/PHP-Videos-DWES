<?php


class Notification{

    public string $message;

    public function __construct(string $message){
        $this->message = $message;

    }

    public function send(){
        echo "shop pop up flash message";
    }
}

class EmailNotification extends Notification{

    public function send(){

        echo "Fire off a email notification";

    }

}


class OSNotification extends Notification{

    public function send(){

        echo "Dispatch an OS specific notification";

    }

}

$notification = new EmailNotification("here is my notification");
$notification->send();