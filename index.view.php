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
    
    <ul>
        <?php foreach ( $tasks as $task ) : ?>
            
            <?php if ( $task->isComplete() ) : ?>
                <strike>
            <?php endif; ?>

                <li><?= $task->description; ?></li>

            <?php if ( $task->isComplete() ) : ?>
                </strike>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>

</body>
</html>