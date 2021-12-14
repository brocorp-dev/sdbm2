<?php

class User {

     public static function login($email,$password) {

        $model = new Db();
       $request = 'SELECT * FROM users where email = ? and password = ?' ;
       $param = array($email,$password);

       $data = $model->select($request, $param);

       return $data;

    }

    public static function all() {

        $model = new Db();
        $request = 'SELECT * FROM users' ;
        $data = $model->select($request);

        return $data;
    }


}

?>