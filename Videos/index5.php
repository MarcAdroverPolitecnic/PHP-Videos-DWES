<?php


class User {}
abstract class Achievment{

    public string $icon;
    public string $description;
    public string $name;

    public function __construct(string $name, string $description, string $icon){
        $this->name = $name;
        $this->description = $description;
        $this->icon = $icon;

    }

    abstract public function qualifier(User $user);

}

class FirstPostAchievement extends Achievment{

    public function qualifier(User $user){

        return true;

    }
}

class TalkativeAchievement extends Achievment{

    public function qualifier(User $user){

        return true;

    }
}


//$firstPost = new FirstPostAchievement(
//    "First Post",
//    "This is my first post",
//    "first-post.svg"
//);
//
//echo $firstPost->qualifier(new User) ? "They qualify" : "They do not qualify";
//