<?php $title = "Landing Page"; ?>
<?php ob_start(); ?>



<?php
$content = ob_get_clean();
require('view/template.php');