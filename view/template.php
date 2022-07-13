<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="./public/styles/indexView.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/06abd416b1.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    include('view/headerView.php');
    ?>
    <section id="main">
   <?=$content?>
    </section>
    <?php 
    include('view/footerView.php');
    ?>
    <script src="./public/js/header.js"></script>
</body>
</html>