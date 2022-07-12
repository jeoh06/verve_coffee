<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <?php
    $links[] = "style.css";
    foreach($links as $link) {?>
        <link rel="stylesheet" href=<?="./public/styles/".$link?>>
    <?php }?>
</head>
<body>
    <?php 
    include('view/headerView.php');
    echo $content;
    include('view/footerView.php');
    ?>
</body>
</html>