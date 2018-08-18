<?php

    $allFiles = glob('tests/*.json');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="index.php" class="back"><div>&lt; Назад</div></a>
    <h2>Все тесты</h2>
    <hr>

    <?php if (!empty($allFiles)): ?>
        <?php foreach ($allFiles as $file): ?>

            <div class="file-block">
                <a href="test.php?number=<?php echo array_search($file, $allFiles); ?>"><?php echo str_replace('tests/', '', $file); ?></a>
            </div>
            <hr>

        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (empty($allFiles)) echo 'Пока не загружено ни одного теста';?>

</body>
</html>
