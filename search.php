<?php require "Beaches.php";
require "db.php";
$beaches = new Beaches; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Search Engine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Search Results</title>
</head>
<body>
    <main class="container">
        <h1>Search results: "Search Text"</h1>
        <!-- <div class='row g-0'>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-4">
                <img src="./images/pexels-asad-photo-maldives-1450353.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8 ps-5">
                <div class="card-body d-flex flex-column justify-content-between h-100">
                  <h2 class="card-title display-1">Beach name</h2>
                  <p class="card-text text-uppercase address" ><i class="bi bi-geo-alt-fill"></i>Parish</p>
                  <div class="row">
                        <p class="card-text col-5"><i class="bi bi-clock-history"></i> Opening hours: 08:00:00 - 19:00:00</p>
                        <p class="card-text col-3"><i class="bi bi-person-fill-lock"></i> Licensed: Yes</p>
                        <p class="card-text col-4"><i class="bi bi-coin"></i> Entrance Fee: USD $10</p>
                  </div>
                  <button class="btn btn-outline-success">Get directions</button>
                </div>
              </div>
            </div>
          </div>
        </div>  -->
          <?php 
        $beaches->getBeaches();
        ?>
 


       <p>No records found</p>

    </main>
</body>
</html>