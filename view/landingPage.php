<?php $title = "Landing Page"; ?>
<?php ob_start(); ?>

<section class="title_block">
    <h1>Great Coffee made simple</h1>
    <p>start your mornings with the world's best coffees. Try our expertly curated artisan coffee from our best roaster delivered directly to your door.</p>
    <button>Start your plan</button>
</section>

<section class="products">
    <h1>Our Collection</h1>
    <div>
        <img src="./public/images/products/verve_adado.webp" alt="">
        <h2>Grand Espresso</h2>
        <p>Light and flavorful blend with cocoa and black pepper for a powerful experience.</p>
    </div>

    <div>
        <img src="./public/images/products/verve_adado.webp" alt="">
        <h2>Planato</h2>
        <p>Brazilian Dark Roast with rich and velvety body, and hints of fruits and nuts.</p>
    </div>

    <div>
        <img src="./public/images/products/verve_adado.webp" alt="">
        <h2>Picollo</h2>
        <p>Brazilian Dark Roast with rich and velvety body, and hints of fruits and nuts.</p>
    </div>

    <div>
        <img src="./public/images/products/verve_adado.webp" alt="">
        <h2>Picollo 2</h2>
        <p>Ethipian Dark Roast with rich and velvety body, and hints of fruits and Lorem Ipsum.</p>
    </div>
</section>

<section class="aboutUs">
    <h1>Why Choose us ?</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the </p>
</section>

<?php
$content = ob_get_clean();
require('view/template.php');