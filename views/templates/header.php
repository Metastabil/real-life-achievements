<?php
/**
 * @var string $title
 */
?>

<!DOCTYPE HTML>
<html lang="de" data-bs-theme="dark">
    <head>
        <title><?= esc($title) . ' | ' . esc(LANG['project_title']) ?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <!-- Title -->
                        <a href="<?= base_url('achievements') ?>" class="navbar-brand">
                            <?= esc(LANG['project_title']) ?>
                        </a>

                        <!-- Navigation Toggler -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Achievements -->
                                <li class="nav-item">
                                    <a href="<?= base_url('achievements') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['achievements']) ?>
                                    </a>
                                </li>

                                <!-- Categories -->
                                <li class="nav-item">
                                    <a href="<?= base_url('categories') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['categories']) ?>
                                    </a>
                                </li>

                                <!-- Bug Reports -->
                                <li class="nav-item">
                                    <a href="<?= base_url('bug-reports') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['bug_reports']) ?>
                                    </a>
                                </li>

                                <!-- Modules -->
                                <li class="nav-item">
                                    <a href="<?= base_url('modules') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['modules']) ?>
                                    </a>
                                </li>

                                <!-- Module Functions -->
                                <li class="nav-item">
                                    <a href="<?= base_url('module-functions') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['module_functions']) ?>
                                    </a>
                                </li>

                                <!-- Logins -->
                                <li class="nav-item">
                                    <a href="<?= base_url('logins') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['logins']) ?>
                                    </a>
                                </li>

                                <!-- Users -->
                                <li class="nav-item">
                                    <a href="<?= base_url('users') ?>" class="nav-link">
                                        <?= esc(LANG['nav']['users']) ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </nav>
        </header>
        <main>