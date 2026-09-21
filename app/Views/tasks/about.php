<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="/">Today / Tasks</a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-label="Toggle navigation">+</button>
            <nav class="site-nav" aria-label="Main navigation">
                <a href="/">Today</a>
                <a href="/tasks">All Tasks</a>
                <a href="/profile">Profile</a>
                <a class="active" href="/about">About</a>
            </nav>
        </div>
    </header>

    <main class="page-shell reveal">
        <p class="eyebrow">Technical Summative 1</p>
        <h1>The Developer</h1>

        <section class="about-panel">
            <p>The Tasks for Today Management System was developed by <strong>Gene Kenry D. Peralta</strong>.</p>
            <p>This system demonstrates CodeIgniter 4 routing, models, database queries, controllers, views, and responsive interface design.</p>
        </section>
    </main>
    <script src="/js/app.js"></script>
