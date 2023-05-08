<?php 
include __DIR__.'/Functions/functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-primary">
    <div class="bg-white container w-50 mt-5">
        <h1 class="text-center pt-5">Generatore di password</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" class="d-flex flex-column align-items-center">
            <label for="passwordLength" class="mb-3">Inserire la lunghezza desiderata per la password</label>
            <input type="number" min="8" placeholder="min 8 caratteri" name="passwordLength" id="passwordLength" class="mb-3">
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
        <?php if(!empty($_GET['passwordLength']) && $_GET['passwordLength'] > 8) {?>
            <h3 class="text-center mt-5">La tua password è:</h3>
            <p class="text-center mt-3"><?php echo randomPass($length) ?></p>
        <?php } ?>
    </div>
</body>
</html>