<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>pagina principal</h1>
    
    <P> nombre pagina: <?= $data['page_title'] ?> </p>

    <p>
        <?php

            dep($data);
        ?>
    </p>    
</body>
</html>