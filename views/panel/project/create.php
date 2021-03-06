<?php
$req = $db->query('SELECT * FROM item_savoir');
$tabSavoir = $req->fetchAll();

$req = $db->query('SELECT * FROM item_indicateur');
$tabIndicateur = $req->fetchAll();
?>







<?php createAlert($alert) ?>

<h1 class="title">Ajout d'un projet</h1>

<form id="add-project" action="" method="POST">
    <input name="name-Project" type="text" placeholder="Nom du Projet" <?= isset($_POST['name-Project']) ? 'value="' . $_POST['name-Project'] . '"' : '' ?> minlength="3" maxlength="40" required>

    <p class="text-center mt-20">
    Avant de cliquer sur <u>Ajouter le projet</u>,<br> vous devez d'abord sélectionner <u>des Savoirs</u> et <u>des Indicateurs</u> utilisés pendant votre projet.
    </p>
    <div class="list-button">
        <button type="button" class="btn btn-secondary" onClick="openModal('modal-Savoir')">Savoirs</button>
        <button type="button" class="btn btn-secondary" onClick="openModal('modal-Indicateur')">Indicateurs</button>
    </div>





    <div id="modal-Savoir" class="modal">
        <h2 class="text-center">Savoir</h2>
        <div class="overflow">
            <table class="skills">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Libelé</th>
                        <th class="checkbox">Mobiliser</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tabSavoir as $k => $savoir): ?>
                        <tr>
                            <td class="text-center"><?= $savoir['N_ITEM_SAVOIR'] ?></td>
                            <td><?= $savoir['LIBEL_ITEM'] ?></td>
                            <td class="checkbox">
                                <input name="Savoir/<?= $savoir['N_ITEM_SAVOIR'] ?>" type="checkbox">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary btn-modal" onClick="closeModal()">Sauvegarder les Savoirs</button>
    </div>



    <div id="modal-Indicateur" class="modal">

        <h2 class="text-center">Indicateur</h2>
        <div class="overflow">
            <table class="skills">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Libelé</th>
                        <th class="checkbox">Indicateur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tabIndicateur as $k => $indicateur): ?>
                        <tr>
                            <td class="text-center"><?= $indicateur['N_ITEM_INDICATEUR'] ?></td>
                            <td><?= $indicateur['LIBEL_ITEM'] ?></td>
                            <td class="checkbox">
                                <input name="Indicateur/<?= $indicateur['N_ITEM_INDICATEUR'] ?>" type="checkbox">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary btn-modal" onClick="closeModal()">Sauvegarder les indicateurs</button>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter le projet</button>
</form>

<div id="modal-shadow" onClick="closeModal()"></div>
