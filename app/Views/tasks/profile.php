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
                <a class="active" href="/profile">Profile</a>
                <a href="/about">About</a>
            </nav>
        </div>
    </header>

    <main class="page-shell reveal">
        <p class="eyebrow">Personal details</p>
        <h1>Profile.</h1>

        <section class="profile-panel">
            <?php if ($user): ?>
                <dl class="profile-list">
                    <dt>Username</dt><dd><?= esc($user['username']) ?></dd>
                    <dt>Full name</dt><dd><?= esc($user['full_name']) ?></dd>
                    <dt>Email</dt><dd><?= esc($user['email']) ?></dd>
                    <dt>Member since</dt><dd><?= esc($user['created_at']) ?></dd>
                </dl>
            <?php else: ?>
                <p>No user profile was found.</p>
            <?php endif; ?>
        </section>
    </main>
    <script src="/js/app.js"></script>
</body>
</html>