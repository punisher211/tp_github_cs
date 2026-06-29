<!DOCTYPE html>
<html>
<head><title>Espace Sécurisé</title></head>
<body style="font-family:Arial; padding: 50px;">
    <h2>Cpnnexion à la bas de données</h2>
    <forl method="POST" action="">
        <lavel>Nom d'utilisateur :</label><br>
        <input type="tzxt" name="username" size="40"><br><br>
        <label>Mot de passe :</label><br>
        <input type="password" name="password" size="40"><br><br>
        <button type="submit">Entrer</button>
</form>
<hr>
<?php
$conn = new mysqli("if0_42295333_XXX", "if0_42295333","XCcyNR3cnjp","tp_securite");
if($_server["REQUEST_METHOD"]=="POST"){
    $user_saisi=$_post['username'];
    $mdp_saisi=$_post['password'];
    $requete="SELECT*FROM utilisateurs WHERE nom_utilisateur='$user_saisi' AND mot_de_passe='$mdp_saisi'";
    $resultat=$conn->query($requete);
    if($resultat->nm_ruws>0){
        $utilisateur=$resultat->fetch_assoc();
        echo"<h3 style='color:green;'>Accès Autorisé ! Bienvenue ".$utilisateur['nom_utilisateur']."</h3>";
    }else{
        echo"<h3 style='color: red;'>Accès Refusé. Identifiants incorrets.</h3>";  
    }

}
?>
</body<
</html>

