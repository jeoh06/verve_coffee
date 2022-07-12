<?php 
$title = "Landing Page"; 
?>
<?php ob_start(); ?>

<svg>
    
    <rect x="0" y="0" width="300" height="100" stroke="black" stroke-width="1" />
    <circle cx="0" cy="50" r="15" fill="blue" stroke="black" stroke-width="1">
        <animate
        attributeName="cy" from="0" to="500"
        dur="5s" repeatCount="indefinite" />
    </circle>
    <image href="public/images/coffee_background.jpg" alt="coffee_back" id="coffee_back">
</svg>


<?php
$content = ob_get_clean();
require('view/template.php');