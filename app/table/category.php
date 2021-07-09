<?php
namespace App\table;
use App\App;

class Category extends Table{
    public static function all() {
        return App::getDb()->query("
        SELECT *
        FROM category"
        , get_called_class());
    }
    
    public function getUrl() {
        return 'index.php?p=category&id=' . $this->id;
    }
}