<?php
namespace App\table;
use App\App;

class Article extends Table {
    public static function getLast($category_id) {
        // return App::getDb()->query('SELECT * FROM articles', 'App\table\Article');
        return App::getDb()->prepare("SELECT articles.id, articles.title, articles.content, category.title as categorie 
        FROM articles 
        LEFT JOIN category ON category_id = category.id 
        WHERE articles.id = ?", [$category_id], __CLASS__, true);
    }
    public static function lastByCategory($category_id) {
        return App::getDb()->prepare("SELECT articles.id, articles.title, articles.content, category.title as categorie 
        FROM articles 
        LEFT JOIN category ON category_id = category.id 
        WHERE category_id = ?", [$category_id], __CLASS__, false);
    }
    public static function all() {
        return App::getDb()->query("SELECT articles.id, articles.title, articles.content, category.title as categorie 
        FROM articles 
        LEFT JOIN category ON category_id = category.id", __CLASS__);
    }
    public function getUrl() {
        return 'index.php?p=article&id=' . $this->id;
    }
    public function getExtract() {
        $html = '<p>' . substr($this->content,0 ,100) . '...</p>';
        $html .= '<p><a href="'. $this->getURL() .'">Voir la suite</a></p>';
        return $html;
        
    }
}