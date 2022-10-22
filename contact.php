<?php
$pageTitle = 'Contact';
require_once('templates/header.html.php');
?>
<div class="container">
    <h1 class="my-4">Nos équipes</h1>
    <div class="card-group">
  <div class="card">
    <img src="images/Anny.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Anny Florence</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card">
    <img src="images/CHRISTINA.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Christina Andrianina</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <img src="images/NANTENAINA.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nantenaina Falimanana</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>
        
        



    <h1>Contactez-nous</h1>
    <div class="row my-5">

        <div class="col-md-8">
            <form action="" id="contact">
                <div class="row">
                    <div class="col-md-6 field-input">
                        <label for="username">Nom</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="col-md-6 field-input">
                        <label for="subject">Sujet</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="field-input">
                            <label for="firstname">Prénom</label>
                            <input type="text" name="firstname" id="firstname">
                        </div>
                        <div class="field-input">
                            <label for="phone">Téléphone :</label>
                            <input type="text" name="phone" id="phone">
                        </div>
                        <div class="field-input">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-input">
                            <label for="message">Votre demande</label>
                            <textarea rows="8"></textarea>
                        </div>
                    </div>

                </div>
                <button>envoyer</button>
            </form>
        </div>
        <div class="col-md-4 " id="contact-about">
            <h1>fararano.fr</h1>
            <ul class="my-5">
                <li>Antananarivo 101</li>
                <li>Contact : contact@fararano.mg</li>
            </ul>
        </div>
    </div>


</div>
<?php require_once('templates/footer.html.php') ?>