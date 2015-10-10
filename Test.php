<?php
class Index {
    public function getIndex(){
        return 'GET - Index';
    }

    public function postIndex(){
        return 'POST - Index';
    }
}

class Test {
    public function getIndex(){
        return 'GET - test';
    }

    public function postIndex(){
        return 'POST - test';
    }
}


class Page {
    public function getIndex($id){
        return 'GET - page'.$id;
    }

    public function postIndex(){
        return 'POST - page';
    }
}
?>
