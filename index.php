<?php

 $error_msg = '';
//  $message = '';

 require_once __DIR__ . '/data/functions.php';

 $number_char = isset($_POST['quantity']) ? $_POST['quantity'] : null;


 if ($number_char == null){

  $error_msg = '';

 }else if ($number_char < 8 || $number_char > 32){

  $error_msg = 'Hai inserito un valore minore di 8 o maggiore di 32';

 }else{
  session_start();
  $_SESSION['message'] = message_return($number_char);

  header('Location: ./response_page.php');

}


require_once __DIR__ . '/partials/head.php';
?>


<body class="vh-100 bg-black">
  <div class="container h-100 d-flex justify-content-center align-items-center ">
    <div class="row">
      <div class="col-12 d-flex flex-column align-items-center">
        
        <h1 class="text-secondary fw-bold">Strong Password Generator</h1>
        <h2 class="text-white fw-bold">Genera una password sicura</h2>
        <p class="bg-info-subtle w-100 py-3 px-5">Scegli quanti caratteri deve avere la password (min 8 - max 32 caratteri)</p>


        <!-- FORM -->
        <form action="index.php" method="POST" class="bg-light w-100">
          <div class="row">

            <?php if(strlen($error_msg) > 0): ?>
              <div class="mt-3 d-flex justify-content-center">
                <span class="fw-bold text-center"><?php echo $error_msg ?> </span>
              </div>
            <?php endif; ?>

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

        <!-- <?php if(strlen($message) > 0): ?>
        <div class="bg-info-subtle w-100 py-3 px-5 mt-3 d-flex justify-content-around">
          <span class="fw-bold text-center"><?php echo $message ?> </span>
        </div>
        <?php endif; ?> -->

      </div>  
    </div>
  </div>
  
</body>
</html>