<?php

class Category {

    public static function all() {
        $db = new Db();
        $request = 'SELECT * FROM categories' ;

        $data = $db->select($request);

        return $data;

    }
}

?>