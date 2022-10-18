<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>

    <form method="post">
        <button type="submit" class="salir" id="salir" name="salir">Salir</button>
        </form>
        
        <?php
        if(isset($_POST['salir'])) {
            session_destroy();
            header("location: ./");
            exit;
        }
      ?>
    
</body>
</html>