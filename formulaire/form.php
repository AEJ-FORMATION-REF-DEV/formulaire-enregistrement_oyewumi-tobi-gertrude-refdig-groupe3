<?php
include('db.php');
if(isset($_POST['valider']))
{
    $nom= htmlspecialchars($_POST['nom']) ;
    $prenom= htmlspecialchars($_POST['prenom']) ;
    $num_aej= htmlspecialchars($_POST['num_aej']) ;
    $tel= htmlspecialchars($_POST['tel']) ;
    $mail= htmlspecialchars($_POST['mail']) ;
    $fonction= htmlspecialchars($_POST['fonction']) ;


    $query="INSERT INTO etudiant (nom,prenoms,num_aej,tel,email,fonction) VALUES('$nom','$prenom','$num_aej','$tel','$mail','$fonction')";
    $query_run= mysqli_query($connection,$query);
    if($query_run)
    {
        echo('success');
        header('location:index.php');
    }
    else{
        echo('erreur');
    }
}
?>

