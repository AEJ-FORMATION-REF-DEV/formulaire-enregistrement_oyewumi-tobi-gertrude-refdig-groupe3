<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="form.php">
    <input type="button" class="design" value="LISTE DES ETUDIANTS" onclick="window.location.href='affichage.php';"/>
    <fieldset>
        <legend>FORMULAIRE</legend>
        <!--la balise table pour formater l'affichage du formulaire-->
       <table>
           <tr>
               <td><label>Nom</label></td>
               <td><input name="nom" type="text" placeholder="Saisir Votre nom" required/> </td>
           </tr>
           <tr>
           <td><label>Prenom</label></td>
           <td><input name="prenom" type="text" placeholder="Saisir Votre prenom" required/> </td>
           
           </tr>
           <tr> 
            <td><label>Numéro AEJ</label></td>
            <td><input name="num_aej" type="text" placeholder="Saisir Votre numéro AEJ" required/> </td>
            </tr>
            <tr>
                <td><label>Numéro de telephone</label></td>
                <td><input type="text" name="tel" placeholder="Saisir votre numéro de telephone" required></td> 
            </tr>
        
          <tr>
              <td><label>Mail</label></td>
              <td><input type="text" name="mail" placeholder="Saisir Votre mail" required/> </td>
          </tr>
          <tr>
              <td><label>Fonction</label></td>
              <td>  
                  <select name="fonction">
                      <option >Deloppeur DATA IA</option>
                      <option >Deloppeur WEB et MOBILE</option>
                       <option>REFERENT DIGITAL</option>
                  </select>
          </tr>
          <tr>
              <td colspan="2"><input name="valider" type="submit" value= "Envoyer"/> <input type="reset" value="Annuler"/></td>
          </tr>
        </table>

    </fieldset>

</form>
</body>
</html>

