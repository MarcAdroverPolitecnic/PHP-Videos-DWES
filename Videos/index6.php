<?php


class Comment{
    public function like(){
        echo "Like the comment";
    }

    public function isLiked(){
        return false;
    }
}

class Post{
    public function like(){
        echo "Like the post";
    }

    public function isLiked(){
        return false;
    }
}

class Thread{
    public function like(){
        echo "Like the thread";
    }

}

class PerformLike{

    public function handle($model){
        if($model->isLiked()){
           return;
        }

        $model ->like();
    }
}

(new PerformLike())->handle(new Thread);