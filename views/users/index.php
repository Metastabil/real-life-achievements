<?php
/**
 * @var string $title
 * @var array $elements
 */
?>

<h1 class="title"><?= esc($title) ?></h1>

<div class="page-actions">
    <a href="<?= base_url('create-user') ?>" class="btn btn-primary">
        <?= esc(LANG['actions']['create']) ?>
    </a>
</div>

<table class="default-table">
    <thead>
        <tr>
            <th><?= esc(LANG['users']['attributes']['username']) ?></th>
            <th><?= esc(LANG['users']['attributes']['email']) ?></th>
            <th><?= esc(LANG['users']['attributes']['administrator']) ?></th>
            <th><?= esc(LANG['users']['attributes']['active']) ?></th>
            <th><?= esc(LANG['users']['attributes']['created_at']) ?></th>
            <th><?= esc(LANG['users']['attributes']['updated_at']) ?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($elements as $e) : ?>
            <tr>
                <td><?= esc($e['username']) ?></td>
                <td><?= esc($e['email']) ?></td>
                <td><?= $e['administrator'] ? esc(LANG['general']['yes']) : esc(LANG['general']['no']) ?></td>
                <td><?= $e['active'] ? esc(LANG['general']['yes']) : esc(LANG['general']['no']) ?></td>
                <td><?= $e['created_at'] ?></td>
                <td><?= $e['updated_at'] ?></td>
                <td class="default-table-actions"></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<script src="<?= base_url('assets/js/users.js') ?>"></script>