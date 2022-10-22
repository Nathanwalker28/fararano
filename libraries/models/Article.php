<?php
namespace Models;

require_once('libraries/autoload.php');

class Article extends Model
{

    /**
     * recuperation des articles
     *
     * @return array
     */
    public function findAll()
    {
        // On utilisera ici la méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
        $resultats = $this->pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
        // On fouille le résultat pour en extraire les données réelles
        $articles = $resultats->fetchAll();

        return $articles;
    }


    /**
     *Récupération de l'article en question
     *@param int id
     */
    function find($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM articles WHERE id = :article_id");

        $query->execute(['article_id' => $id]);

        $article = $query->fetch();
        return $article;
    }

    /**
     * supprime un article de l'identifiant donnée
     *
     * @param  int $id
     * @return void
     */
    function delete($id)
    {
        $query = $this->pdo->prepare('DELETE FROM articles WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    /**
     * insertion d'un nouveau article dans la base de données
     */
    public function insert($title, $slug, $introduction, $content)
    {
        $query = $this->pdo->prepare("INSERT INTO articles 
        SET title = :title, slug = :slug, created_at = NOW(), introduction = :introduction, content = :content");

        $query->execute(compact('title', 'slug', 'introduction', 'content'));
    }
}
