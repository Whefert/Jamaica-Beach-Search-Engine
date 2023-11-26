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

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="./">Home</a>
    </div>
  </div>
</nav>
    <main class="container">
        <h1>Search results: "<?php echo $_GET["search"]?>"</h1>
          <?php 
        $beaches->getBeaches();
        ?>
    </main>
</body>
</html>