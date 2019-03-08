<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        <style media="screen">
            header {
                background-color: #e3e3e3;
                padding: 2em;
            }
        </style>
    </head>
    <body>
<!-- referencing a super global -->
        <header>
            <ul>
                <?php foreach($tasks as $task) : ?>
                <li>
                        <?php if($task->completed) : ?>
                            <strike><?= $task->description; ?></strike>
                        <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
                    <?php endforeach; ?>
            </ul>
        </header>

    </body>
</html>
