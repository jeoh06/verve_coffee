<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="./public/styles/indexView.css">
    <script src="https://kit.fontawesome.com/06abd416b1.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    include('view/headerView.php');
    echo $content;
    include('view/footerView.php');
    ?>
</body>
</html>