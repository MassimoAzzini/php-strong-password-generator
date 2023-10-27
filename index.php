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
  
        <form action="index.php" method="POST" class="bg-light w-100">
          <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
              <label for="quantity">Lunghezza Password:</label>
              <input class="w-25 ms-3" type="number" id="quantity" name="quantity" min="8" max="32">
            </div>
            <div class="col-12 d-flex justify-content-center my-4">
              <button type="submit" class="btn btn-primary">Invia</button>
              <button type="reset" class="btn btn-secondary ms-3">Annulla</button>

            </div>
          </div>
        </form>

      </div>  
    </div>
  </div>
  
</body>
</html>