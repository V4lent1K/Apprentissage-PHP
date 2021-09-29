<?php 

    include("common/header.php");
    include("common/menu.php");

?>

<h1>Sélection du personnage</h1>

<form action="#" method="POST">

    <label for="rayon">Personnage : </label>
    <select name="perso" id="perso">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>

    <input type="submit" value="Valider"> 

</form>

<?php 

    if(isset($_POST["perso"])){

        if($_POST["perso"] === "homme"){

            echo "<img src=\"sources/images/player.png\" alt=\"Player Homme\">";

        } else if($_POST["perso"] === "femme"){

            echo "<img src=\"sources/images/playerF.png\" alt=\"Player Femme\">";

        }

    } else {

        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
        
    }

?>

<?php 

    include("common/footer.php");
    
?>