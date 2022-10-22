<?php
require_once('libraries/autoload.php');
require_once('libraries/Database.php');
require_once('libraries/auth.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

force_user_connect();

if (isset($_POST['submit'])) {

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name         = test_input($_POST['name']);
    $title        = test_input($_POST['title']);
    $introduction = test_input($_POST['introduction']);
    $content      = test_input($_POST['content']);

    $imagefileName       = $_FILES['image']['name'];
    $imagefileTmpName    = $_FILES['image']['tmp_name'];
    $imagePath           = "images_uploads/" . $imagefileName;

    $req = Database::getPdo()->prepare("INSERT INTO 
    articles(title, name, introduction, content, created_at, image)
    VALUES (:title, :name, :introduction, :content, NOW(), :image)");

    $res = $req->execute([
        'title' => $title,
        'name' => $name,
        'introduction' => $introduction,
        'content' => $content,
        'image' => $imagePath
    ]);

    if ($res) {
        move_uploaded_file($imagefileTmpName, $imagePath);
    }
    Http::redirect('article.php');
    die();
}
$pageTitle = "Votre annonce";
require_once('templates/header.html.php'); ?>

<form method="POST" action="" enctype="multipart/form-data" id="article-register">
            <h2>DEPOSEZ  VOTRE ANNONCE ICI</h2>
                <div class="field-input">
                    <label for="name">Votre nom :</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="field-input">
                    <label for="title">Titre de votre annonce</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="field-input">
                    <label for="introduction">Introduction</label>
                    <input type="text" name="introduction" id="introduction">
                </div>
                <div class="field-input">
                    <label for="content">Contenu de l'annonce</label>
                    <textarea name="content" id="" cols="40" rows="10">...</textarea>
                </div>
                <input type="file" name="image" id="image">
                <div class="field-input">
                    <input type="submit" value="envoyer" name="submit">
                </div>
        </div>
    </form>


    <?php require_once('templates/footer.html.php') ?>