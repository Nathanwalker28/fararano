<?php
require_once('libraries/Autoload.php');

$model = new \Models\Users();

if (isset($_POST['submit'])) {
    $user = new \Controllers\Users(
        [
            'name' =>  $_POST['name'],
            'firstname' => $_POST['firstname'],
            'adress' => $_POST['adress'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role' => $_POST['user_role']
        ]
    );
    if ($user->isUserValid()) {
        if ($model->checkUser($user->getName())) {
            $errorMsg = 'vous avez déja un compte, veuillez vous connecté';
        } else {
            $model->insert($user);
            $message = "inscription réussi";
        }
    } else {
        $error =  $user->getErrors();
    }
}
?>

<?php
$pageTitle = "s'inscrire";
require_once('templates/header.html.php');
?>
<div class="container">
    <h1>Inscrivez-vous</h1>
    <div class="row">
        <p> Veuillez remplir le formulaire ci-dessus pour devenir membre et profiter de nos offres</p>


        <div class="col-md-6">

            <form action="" method="POST" id="registration">

                <div class="row">
                    <?php if (isset($message)) : ?>
                        <div class="alert alert-success mx-3" role="alert">
                            <?= $message ?>
                            <a href="login.php">se connecter</a>
                        </div>
                    <?php endif ?>

                    <?php if (isset($errorMsg)) : ?>
                        <div class="alert alert-danger mx-3" role="alert">
                            <?= $errorMsg ?>
                            <a href="login.php">se connecter</a>
                        </div>
                    <?php endif ?>
                    <div class="col-md-6">
                        <div class="field-input">
                            <?php if (isset($error) && in_array(\Controllers\Users::NAME_INVALID, $error)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    votre nom est invalide
                                </div>
                            <?php endif ?>
                            <label for="name">Nom :</label>
                            <input type="text" name="name" id="name">
                        </div>


                        <div class="field-input">
                            <?php if (isset($error) && in_array(\Controllers\Users::FIRSTNAME_INVALID, $error)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    votre prénom est invalide
                                </div>
                            <?php endif ?>
                            <label for="firstname">Prenom :</label>
                            <input type="text" name="firstname" id="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-input">
                            <?php if (isset($error) && in_array(\Controllers\Users::PHONE_INVALID, $error)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    numéro de téléphone est invalide
                                </div>
                            <?php endif ?>
                            <label for="phone">Téléphone :</label>
                            <input type="text" name="phone" id="phone">
                        </div>


                        <div class="field-input">
                            <?php if (isset($error) && in_array(\Controllers\Users::ADRESS_INVALID, $error)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    adresse est invalide
                                </div>
                            <?php endif ?>
                            <label for="adress">Adresse :</label>
                            <input type="text" name="adress" id="adress">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="check-input">
                        <div>
                            <label for="">Vous êtes un agriculteur</label>
                            <input type="checkbox" name="user_role" value="agriculteur">
                        </div>
                        
                        <div>
                            <label for="">Vous désirez achéter</label>
                            <input type="checkbox" name="user_role" value="collecteur">
                        </div>
                        
                        <div>
                            <label for="">Aucun des deux</label>
                            <input type="checkbox" name="user_role" value="none">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="field-input">
                        <?php if (isset($error) && in_array(\Controllers\Users::EMAIL_INVALID, $error)) : ?>
                            <div class="alert alert-danger" role="alert">
                                votre email est invalide
                            </div>
                        <?php endif ?>
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email">
                    </div>

                    <div class="field-input">
                        <?php if (isset($error) && in_array(\Controllers\Users::PASSWORD_INVALID, $error)) : ?>
                            <div class="alert alert-danger" role="alert">
                                mot de passe invalide
                            </div>
                        <?php endif ?>
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>


                <div class="field-button">
                    <button type="submit" name="submit">créer votre compte</button>
                    <button><a href="login.php">se connecter</a></button>
                </div>

            </form>
        </div>
    </div>

</div>
</div>

<?php require_once('templates/footer.html.php') ?>