<?php

class Wiki {
    public $id;
    public $title;
    public $content;
    public $auteur_id;
    public $categorie_id;
    public $img_name;

    public function __construct($title, $content, $auteur_id, $categorie_id, $img_name) {
        $this->title = $title;
        $this->content = $content;
        $this->auteur_id = $auteur_id;
        $this->categorie_id = $categorie_id;
        $this->img_name = $img_name;
    }

    public function createWiki() {
        global $db;
        $stmt = $db->prepare("INSERT INTO Wikis (title, content, auteur_id, categorie_id, img) VALUES (:title, :content, :auteur_id, :categorie_id, :img)");
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':auteur_id', $this->auteur_id);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':img', $this->img_name);
        return $stmt->execute();
    }

    public function updateWiki($id) {
        global $db;
        $stmt = $db->prepare("UPDATE Wikis SET title = :title, content = :content, categorie_id = :categorie_id, img = :img WHERE id = :id");
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':img', $this->img_name);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function getWikiById($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM Wikis WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllWikis() {
        global $db;
        $stmt = $db->prepare("SELECT * FROM Wikis");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTagToWiki($wikiId, $tagId) {
        global $db;
        $stmt = $db->prepare("INSERT INTO Wiki_Tags (wiki_id, tag_id) VALUES (:wiki_id, :tag_id)");
        $stmt->bindParam(':wiki_id', $wikiId);
        $stmt->bindParam(':tag_id', $tagId);
        return $stmt->execute();
    }

    public function getLastInsertId() {
        global $db;
        return $db->lastInsertId();
    }    

    // Additional methods can be added as needed
}
?>
