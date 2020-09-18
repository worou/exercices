<?php

ob_start();
?>
<form action="" method="POST">
<div class="row">
    <div class="form-group col-6">
        <label for="nom">Nom</label>
        <input class="form-control" type="text" name="nom" id="nom">
    </div>
    <div class="form-group col-6">
        <label for="prenom">Prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom">
    </div>
    <div class="form-group col-6">
        <label for="age">Age</label>
        <input class="form-control" type="text" name="age" id="age">
    </div>
    <div class="form-group col-6">
        <label for="adresse">Adresse</label>
        <input class="form-control" type="text" name="adresse" id="adresse">
    </div>
    <div class="form-group col-6">
        <label for="salaire">Salaire</label>
        <input class="form-control" type="text" name="salaire" id="salaire">
    </div>
    <div class="form-group col-12">
        <label for="description">escription</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>   
    </div>

    <button class="btn btn-primary btn-block" name="soumis" type="submit">Ajouter</button>
    
</div>

</form>



<?php
$contenu=ob_get_clean();
require_once('./views/template.php');
?>

