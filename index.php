<?php

 $message = '';
 $pass = []; 

 $number_char = isset($_POST['quantity']) ? $_POST['quantity'] : null;

 if ($number_char == null){
  $message = '';
 }else if ($number_char < 8 || $number_char > 32){
  $message = 'Hai inserito un valore minore di 7 o maggiore di 32';
 }else{

   $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%&@#-';
   $combLen = strlen($comb) - 1; 
   for ($i = 0; $i < $number_char; $i++) {
       $n = rand(0, $combLen);
       $pass[] = $comb[$n];
   }
   $message = 'Password generata:<br>' .implode($pass);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

  <title>PHP Strong Password Generator</title>
</head>
<body class="vh-100 bg-black">
  <div class="container h-100 d-flex justify-content-center align-items-center ">
    <!-- <div class="d-flex flex-column align-items-center"> -->
    <div class="row">
      <div class="col-12 d-flex flex-column align-items-center">
        
        <h1 class="text-secondary fw-bold">Strong Password Generator</h1>
        <h2 class="text-white fw-bold">Genera una password sicura</h2>
        <p class="bg-info-subtle w-100 py-3 px-5">Scegli quanti caratteri deve avere la password (min 8 - max 32 caratteri)</p>


        <!-- FORM -->
        <form action="index.php" method="POST" class="bg-light w-100">
          <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
              <label for="quantity">Lunghezza Password:</label>
              <input class="w-25 ms-3" type="number" id="quantity" name="quantity">
            </div>
            <div class="col-12 d-flex justify-content-center my-4">
              <button type="submit" class="btn btn-primary">Invia</button>
              <button type="reset" class="btn btn-secondary ms-3">Annulla</button>
            </div>
          </div>
        </form>
        <!-- END FORM -->

        <?php if(strlen($message) > 0): ?>
        <div class="bg-info-subtle w-100 py-3 px-5 mt-3 d-flex justify-content-around">
          <span class="fw-bold text-center"><?php echo $message ?> </span>
        </div>
        <?php endif; ?>

      </div>  
    </div>
  </div>
  
</body>
</html>