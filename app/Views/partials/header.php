<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#0b1220">
    <title><?= esc($title) ?> | SimplePOS</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>?v=2">
</head>
<body>

<?php $currentPath = trim(uri_string(), '/'); ?>

<header class="site-header">
    <div class="container navigation">
        <a class="brand" href="<?= base_url() ?>" aria-label="SimplePOS home">
            <span class="brand-mark">S</span>
            <span><strong>SimplePOS</strong><small>Retail workspace</small></span>
        </a>

        <nav aria-label="Primary navigation">
            <a class="<?= $currentPath === '' ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
            <a class="<?= $currentPath === 'customers' ? 'active' : '' ?>" href="<?= base_url('customers') ?>">Customers</a>
            <a class="<?= $currentPath === 'users' ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a>
            <a class="<?= $currentPath === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
        </nav>
    </div>
</header>

<main class="container">
