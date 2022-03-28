<?php require_once('partials/head.php'); ?>

<h1>Sisesta asukoht</h1>

<form action="/location" method="POST">
    <input type="text" name="location">
    <button type="submit">Sisesta</button>
</form>



<ul>
    <?php foreach ( $tasks as $task ) : ?>
        
        <?php if ( $task->completed ) : ?>
            <strike>
        <?php endif; ?>

            <li><?= $task->description; ?></li>

        <?php if ( $task->completed ) : ?>
            </strike>
        <?php endif; ?>

    <?php endforeach; ?>
</ul>

<?php require_once('partials/footer.php'); ?>
