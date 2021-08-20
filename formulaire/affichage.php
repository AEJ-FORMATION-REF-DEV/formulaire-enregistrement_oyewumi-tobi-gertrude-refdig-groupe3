<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
    
</head>
<body>
   
<?php
    include('db.php');
?>
<div>
            <?php
                $query = "SELECT * FROM etudiant";
                $query_run = mysqli_query($connection, $query);
            ?>

              
            <input type="button" class="design" value="Formulaire d'enregistrement" onclick="window.location.href='index.php';"/>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th> Prenoms </th>
                            <th> Numero aej </th>
                            <th> Telephone </th>
                            <th> Mail </th>
                            <th> Fonction </th>
                            <th> Date d'enregistrement </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr class="survol">
                                <td><?php  echo $row['nom']; ?></td>
                                <td><?php  echo $row['prenoms']; ?></td>
                                <td><?php  echo $row['num_aej']; ?></td>
                                <td><?php  echo $row['tel']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['fonction']; ?></td>
                                <td><?php  echo $row['dat']; ?></td>                            
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "Aucun enregistrement trouvé ";
                        }
                        ?>
                    </tbody>
                </table>
    </div>
                    </br>
    
</body>
</html>