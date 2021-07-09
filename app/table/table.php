<?php
namespace App\table;
use App\App;

class Table {
    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
    public static function find($id) {
        return App::getDb()->prepare("
        SELECT *
        FROM category 
        WHERE id = ?"
        , [$id], get_called_class(), true);
    }
}