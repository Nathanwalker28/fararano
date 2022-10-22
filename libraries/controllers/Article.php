<?php

namespace Controllers;

require_once('libraries/autoload.php');

class Article
{

    public function __construct()
    {
        $this->model = new \Models\Article();
    }


    //montrer la liste
    public function index()
    {

        //récuperation des articles
        $articles = $this->model->findAll();


        /**
         * Affichage
         */
        $pageTitle = "Nos producteurs";

        \renderer::render('articles/index', compact('pageTitle', 'articles'));
    }

    //montrer un article
    public function show()
    {

        /**
         * CE FICHIER DOIT AFFICHER UN ARTICLE 
         * On doit d'abord récupérer le paramètre "id" qui sera présent en GET et vérifier son existence
         * Si on n'a pas de param "id", alors on affiche un message d'erreur !
        */


        /**
         * Récupération du param "id" et vérification de celui-ci
         */
        // On part du principe qu'on ne possède pas de param "id"
        $article_id = null;

        // Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
        if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
            $article_id = $_GET['id'];
        }

        // On peut désormais décider : erreur ou pas ?!
        if (!$article_id) {
            die("Vous devez préciser un paramètre `id` dans l'URL !");
        }


        //recuperer un article
        $article = $this->model->find($article_id);


        /**
         *On affiche 
         */
        $pageTitle = $article['title'];
        \Renderer::render('articles/show', compact('pageTitle', 'article', 'article_id'));
    }

    //supprimer un article
    public function delete()
    {
        /**
         * DANS CE FICHIER, ON CHERCHE A SUPPRIMER L'ARTICLE DONT L'ID EST PASSE EN GET
         * 
         * Il va donc falloir bien s'assurer qu'un paramètre "id" est bien passé en GET, puis que cet article existe bel et bien
         * Ensuite, on va pouvoir effectivement supprimer l'article et rediriger vers la page d'accueil
         */

        /**
         *On vérifie que le GET possède bien un paramètre "id" (delete.php?id=202) et que c'est bien un nombre
         */
        if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
            die("Ho ?! Tu n'as pas précisé l'id de l'article !");
        }

        $id = $_GET['id'];

        /**
         * Vérification que l'article existe bel et bien
         */
        $article = $this->model->find($id);
        if (!$article) {
            die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
        }

        /**
         * 4. Réelle suppression de l'article
         */
        $this->model->delete($id);


        /**
         * 5. Redirection vers la page d'accueil
         */
        \Http::redirect('index.php');
    }


    //insertion d'un nouveau article dans la base de données
}
