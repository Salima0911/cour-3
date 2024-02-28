<?php 
$title = 'ACCUEIL';
require_once(__DIR__."/partials/head.php");  ?>






<h1 class="mt-3">edit produit</h1>
<form action="" method="POST">
    <div>
        <label for="title">title</label>
        <input type="text" name="title" value= "<?php echo $product ['title']  ?>">
    </div>

    <div>
        <label for="description">description</label>
        <textarea name="description" cols="30" rows="10" id="" cols="30" rows="10"><?php echo $product ['description']  ?></textarea>
    </div>

    <div>
        <label for="price">price</label>
        <input type="number" name='price' value= "<?php echo $product ['price']  ?>">
    </div>
    <button type="submit">create</button>
</form>



<?php 
require_once(__DIR__ . "/partials/footer.php");
?>
    
 


