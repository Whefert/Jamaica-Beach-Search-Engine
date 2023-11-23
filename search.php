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
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1>Search results: "Search Text"</h1>
        <div class='row g-0'>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-4">
                <img src="./images/pexels-asad-photo-maldives-1450353.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div> 
          <?php 
        $beaches->getAllBeaches();
        ?>
 


       <p>No records found</p>

    </main>
</body>
</html>