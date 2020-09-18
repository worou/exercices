<?php

//var_dump($rows);
ob_start();
?>
<h1 class="h2">Liste des employés</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Adresse</th>
            <th>Salaire</th>
            <th>Description</th>
            <th>Crée le</th>
            <th>Actions</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach($rows as $row){ ?>
        <tr>
            <td><?=$row->getMatricule();?></td>
            <td><?=$row->getNom();?></td>
            <td><?=$row->getPrenom();?></td>
            <td><?=$row->getAge();?></td>
            <td><?=$row->getAdresse();?></td>
            <td><?=$row->getSalaire();?></td>
            <td><?=$row->getDescription();?></td>
            <td><?=$row->date_created;?></td>
            <td>
                <a href="">Editer</a>
                <a href="">Supprimer</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
$contenu = ob_get_clean();
require_once('./views/template.php');