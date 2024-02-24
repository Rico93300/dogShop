<?php
    $title = "Contact";
    require_once(__DIR__ ."/partials/head.php")
?>


<div class="text-center m-5">
    <h1>Vous avez une question ?</h1>
    <p>Laissez nous votre message</p>
</div>

<form action="contactValide" method="POST" class="d-flex justify-content-evenly">

    <div class="row">
        <div class="col-sm-6 g-5">
            <div data-mdb-input-init class="form-outline">
                <input type="text"  class="form-control rounded-pill border border-warning" placeholder="Votre nom"/>
                <label class="form-label" type="text" name="nom" for="nom" required pattern="[A-Za-z '-]+$" maxlength="20"></label>
            </div>
        </div>

        <div class="col-sm-6 g-5">
            <div data-mdb-input-init class="form-outline">
                <input type="text" class="form-control rounded-pill border border-warning" placeholder="Votre email" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$"/>
                <label class="form-label" type="email" name="email" for="email"></label>
            </div>
        </div>


        <div class="g-5">
            <div data-mdb-input-init class="form-outline">
                <textarea name="message" class="form-control rounded-4 border border-warning" tabindex="4" placeholder="Votre message" cols="30" rows="30" required></textarea>
            </div>
        </div>

        <div class="d-flex flex-row-reverse g-5 row-cols-7 m-3 mb-5">
                <button type="submit" class="btn btn-warning text-white rounded-pill fw-bold">Envoyer</button>
        </div>

    </div>

</form>


<?php require_once(__DIR__ ."/partials/footer.php") ?>