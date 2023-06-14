<?php
    require_once APPROOT . '/Views/Includes/header.php';
?>


<div class="mt-4"></div>


<!-- <?php

    $Leveranciers = $data['Leveranciers'];
?>     -->

<table class="table table-hover">
    <thead>
        <tr>
            <th>Naam</th>
            <th>Contactpersoon</th>
            <th>LeverancierNummer</th>
            <th>Mobiel</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['Leveranciers'] as $Leveranciers) {?>
        <tr>
            <input type="hidden" id="id" value="<?= $Leveranciers->Id ?>">
            <td> <?= $Leveranciers->Naam?></td>
            <td> <?= $Leveranciers->Contactpersoon ?> </td>
            <td> <?= $Leveranciers->LeverancierNummer?> </td>
            <td> <?= $Leveranciers->Mobiel?></td>
            <td class="float-right">
                <a class="btn btn-info" href="<?php URLROOT; ?>/Leverancier/wijzigen/<?= $Leveranciers->Id ?>"><i
                        class="fab fa-readme" title="details sollicitatie"></i></a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php
    require_once APPROOT . '/Views/Includes/footer.php';
?>