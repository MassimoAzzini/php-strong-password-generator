<?php
session_start();

if ($_SESSION['message']){
  $message = $_SESSION['message'];
}else{
  header('Location: ./index.php');
}

require_once __DIR__ . '/partials/head.php';
?>


<body class="vh-100 bg-black">
  <div class="container h-100 d-flex justify-content-center align-items-center ">
    <div class="row">
      <div class="col-12 d-flex flex-column align-items-center">
        
        <h1 class="text-secondary fw-bold">Strong Password Generator</h1>
        <h2 class="text-white fw-bold">La tua password generata è la seguente</h2>
        <h1 class="bg-info-subtle w-100 py-3 px-5 text-center"><?php echo $message ?></h1>

      </div>  
    </div>
  </div>
  
</body>
</html>