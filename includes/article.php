<?php

class Aritcle {
    public function fetch_all() {
        global $pdo;
        
        $query = $pdo->prepare("Select * FROM articles");
        $query->execute();
        
        return $query->fetchAll();
    }
    public function fetch_data ($article_id) {
        global $pdo;
        
        $query = $pdo->prepare("Select * FROM articles WHERE $article_id = ?");
        $query->bindValue(1,$article_id);
        $query->execute();
        
        return $query->fetch();
    }
    
}



?>
