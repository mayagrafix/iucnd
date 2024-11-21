<?php
include( "includes/header.php" );

//Get Variable from Faculty Grid
$getPageName = $_GET[ 'publicationspagename' ];
?>

<!-- Data Section -->
<div class="container"> 
  <!-- Dynamic List -->
  <div class="col-12 mt-4">
    <div class="card bg-verylightpurple">
      <div class="card-header">
          <?php
          if ($getPageName == 'patents') {
              echo $getPageName;
          } elseif ($getPageName == 'journal-articles') {
              echo 'Journal Articles';
          } elseif ($getPageName == 'conferences') {
              echo 'Conferences / Symposia';
          }
          ?>
      </div>
      <div class="card-body">
			<?php echo writePublicationsList ($getPageName); ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Dynamic List --> 
</div>
<!-- End Data Section -->

<?php include("includes/footer.php"); ?>
