<?php
require_once( "includes/functions.php" );

// Turn off all error reporting
error_reporting( 0 );

?>

<!DOCTYPE html>
<html lang="en">

	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echoTitle(); ?></title>

<!-- Register Google Roboto Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5.1.3 -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Add custom styles -->
<link href="css/iucnd_styles.css" rel="stylesheet">

<!-- Favicons -->
<link rel="shortcut icon" href="images/logo-favicon.jpg" />
<link rel="apple-touch-icon" href="images/logo-favicon.jpg" />
</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-darkpurple static-top px-2">
  <div class="container"> 
    
    <!-- If Current page is not Home page echo index.php as link--> 
    <a class="navbar-brand py-4" href="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") { echo "#"; } else { echo "index.php"; } ?>"><img src="images/iucndlogo.png" class="brandlogo img-fluid" alt="IUCND Logo"/> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <?php echo writeMenu(); ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navigation Bar --> 

