<?php
namespace App\Model;

use App\Database\Database;
use PDO ;


class adminModel extends HomeModel{
    private $db;

    public function sameWiki(){
        $wikis = $this->getWiki();
        return $wikis;
    }
    public function sameCategories(){
        $categories = $this->getCategories();
        return $categories;
    }
    public function sameTags(){
        $tags = $this->getTags();
        return $tags;
    }
    
   



}
