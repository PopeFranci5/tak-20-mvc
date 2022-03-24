<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            background-color: #e3e3e3;
            padding: 2em;
        }
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="/about">Meist</a></li>
            <li><a href="/contact">Kontakt</a></li>
            <li><a href="/about/culture">Meie kultuurist</a></li>
        </ul>
    </nav>

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

</body>
</html>