<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>test git</title>
</head>
<body>
    <div class= "container">
        <h1 class="display-4 text-center text-info">formulaire</h1><hr>

        <?php
         echo '<pre>' ; print_r($_POST); echo '</pre>';
        if($_POST)
        { 
                echo '<div class="col-md-4 offset-md-4 alert alert-info text-center md-4">';
                   echo "Pseudo : <strong>$_POST[pseudo]</strong><hr>";
                   // echo "pseudo : " . $_POST ['pseudo'] . <hr>";
                   echo "Mot de passe : <strong>$_POST[password]</strong>";
                 echo '</div>';
        } 
        ?>
        <form method="post" action="" class="col-md-4 offset-md-4 -text-center">
        <div class="form-group">
            <label for="pseudo">pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" 
            placeholder="Enter pseudo">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="password"
             placeholder="Entrer Password">
        </div>
        <button type="submit" class="btn btn-primary">connexion</button>
        </form>
    </div> 
</body>
</html>