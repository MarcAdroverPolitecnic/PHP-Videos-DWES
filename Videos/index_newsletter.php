<?php

class User{

    public $email;
}

class Newsletter{

    public NewsletterProvider $provider;

    public function __construct(NewsletterProvider $provider){
        $this->provider = $provider;


    }
    public function subscribe(User $user){

        $this->provider->addToList("default", $user->email);
        $user->update(["susbscribed" => true]);

        return true;
    }
}

interface NewsletterProvider{
    public function addToList(string $list, string $email): void;
}

class CampaignMonitorProvider implements NewsletterProvider {

    public function addToList(string $list, string $email): void{
        $cm = new CampaignMonitorAPI();

        $cm->addAppiKey("sadadsada");

        $list = $cm->lists->find($list);

        $list->addToList($email);
    }
}


class PostmarkProvider implements NewsletterProvider {

    public function addToList(string $list, string $email): void{
        $cm = new PostmarkAPI("dadasdasd");

        $cm->addAppiKey("sadadsada");

        $list = $cm->addToDefaultList($email);
    }
}

$newsletter = new Newsletter(new PostmarkProvider());

$newsletter->subscribe(new User);