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
                <a class="active" href="/">Today</a>
                <a href="/tasks">All Tasks</a>
                <a href="/profile">Profile</a>
                <a href="/about">About</a>
            </nav>
        </div>
    </header>

    <main class="page-shell reveal">
        <p class="eyebrow">Daily focus</p>
        <h1>Tasks for today.</h1>
        <p class="intro">A clear view of what needs your attention right now.</p>
        <p class="date-label"><?= date('F j, Y') ?></p>

        <?php if (empty($tasks)): ?>
            <p class="empty-state">No tasks scheduled for today.</p>
        <?php else: ?>
            <section class="task-grid" aria-label="Today's tasks">
                <?php foreach ($tasks as $task): ?>
                    <article class="task-card <?= esc($task['status']) === 'completed' ? 'is-complete' : '' ?>" data-task-id="<?= esc($task['id']) ?>" data-status="<?= esc($task['status']) ?>">
                        <div>
                            <p class="task-meta"><?= esc($task['task_date']) ?></p>
                            <h2 class="task-title"><?= esc($task['title']) ?></h2>
                        </div>
                        <button class="task-status" type="button" aria-pressed="<?= esc($task['status']) === 'completed' ? 'true' : 'false' ?>">
                            <?= esc($task['status']) === 'completed' ? 'Completed' : 'Mark complete' ?>
                        </button>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>
    </main>
    <script src="/js/app.js"></script>
</body>
</html>