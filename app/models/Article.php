<?php

class Article {

    public static function all() {
        $db = new Db();
        $request = 'SELECT * FROM items' ;

        $data = $db->select($request);

        return $data;

    }

    public static function find($id)
    {
        $db = new Db();
        $request = 'SELECT * FROM items where id = ?' ;
        $data = $db->select($request,$id);

        return $data[0];

    }

    public static function insert($name,$description,$price_ht)
    {
        $db = new Db();
        try{
             $request = "INSERT INTO items (name, description, price_ht, category_id, slug, tax_id, price_ttc) VALUES (?,?,?,?,?,?,?)";
            $param = array($name,$description,$price_ht, '1', $name, '1', $price_ht);
            $data = $db->insert($request,$param);

            return $data;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
       
    }

}

?>