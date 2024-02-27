<?php 
$title = 'Register';
require_once(__DIR__."/partials/head.php");?>

<h2>Page d'inscription</h2>


   
    <form action="" method= "POST">
    <label for="name"> name</label>
        <input type="name" name="name" />

        <label for="email">Email</label>
        <input type="email" name='email'/>

        <label for="password"> password</label>
        <input type="password" name="password" />
        <!-- pour afficher les erreurs -->
        <?php if (isset($error)) {
        echo "<p class='text-danger'>" . $error . "</p>";
        } ?>
    
        <button type="submit" class="btn btn-primary">Inscrire</button>
    </form>
    <?php 
    // if(isset ($errorMessage)){
    //     echo "<p class='text-danger'>" . $errorMessage . "<p>";
    // } 
     require_once(__DIR__."/partials/footer.php"); 
    

 
    
     ?>
