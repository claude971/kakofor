<h2><?= esc($title) ?></h2>

<?php if (! empty($apprenant) && is_array($apprenant)): ?>

    <?php foreach ($apprenant as $apprenant_item): ?>

        <h3><?= esc($apprenant_item['nom']) ?></h3>

        <div class="main">
            <?= esc($apprenant_item['prenom']) ?>
        </div>
        <p><a href="/apprenant/<?= esc($apprenant_item['id_apprenant'], 'url') ?>">Fiche de l'apprenant</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>Aucun apprenant enregistré</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>