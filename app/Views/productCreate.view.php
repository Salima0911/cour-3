<?php 
$title = "Create products";

require_once(__DIR__ . "/partials/head.php");
?>

<h1 class="mt-3">Création de produit</h1>
<form action="/product-create" method="POST">
    <div>
        <label for="text">title</label>
        <input type="text" name="title"> 
    </div>

    <div>
        <label for="description">description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>

    <div>
        <label for="price">price</label>
        <input type="number" name='price'>
    </div>
    <button type="submit">create</button>
</form>



<?php 
require_once(__DIR__ . "/partials/footer.php");
?>