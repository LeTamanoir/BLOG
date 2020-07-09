<?php

namespace App\Table;
use Core\Table\Table;


class PostTable extends Table{

    /**
     * Récupère les derniers articles
     * @return array
     */
    public function last(){
        return $this->query("
        SELECT posts.id, posts.title, posts.content, posts.date, categories.title as categorie
        FROM posts
        LEFT JOIN categories ON category_id = categories.id
        ORDER BY posts.date DESC"
        );
    }

    /**
     * Récupère les derniers articles en liant la categorie associée
     * @return \App\Entity\PostEntity
     * @param $id int
     */
    public function find($id){
        return $this->query("
        SELECT posts.id, posts.title, posts.content, posts.date, categories.title as categorie
        FROM posts
        LEFT JOIN categories ON category_id = categories.id
        WHERE posts.id = ?
        ", [$id], true);
    }

    /**
     * Récupère les derniers articles de la categorie demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
        SELECT posts.id, posts.title, posts.content, posts.date, categories.title as categorie
        FROM posts
        LEFT JOIN categories ON category_id = categories.id
        WHERE posts.category_id = ?
        ORDER BY posts.date DESC
        ", [$category_id]);
    }
    

    
}