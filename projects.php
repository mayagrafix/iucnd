<?php
include( "includes/header.php" );
?>

<!-- Data Section -->
<div class="container">
  <!-- Dynamic List -->
  <div class="col-12 mt-4">
    <div class="card bg-verylightpurple">
      <div class="card-header"> Projects</div>
      <div class="card-body">
        <table class="table table-responsive align-middle">
          <thead class="text-center align-middle bg-darkpurple text-white">
            <tr class="align-items-center">
              <th scope="col" class="col-1">No.</th>
              <th scope="col" class="col-4">Title</th>
              <th scope="col" class="col-2">Funding Agency</th>
              <th scope="col" class="col-2">Amount and <br> Duration</th>
              <th scope="col" class="col-1">Status</th>
              <th scope="col" class="col-2">Principal Investigator/<br>Co-PI
              </th>
            </tr>
          </thead>
          <tbody>
            <?php echo writeProjects(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- End Dynamic List -->
</div>
<!-- End Data Section -->

<?php include("includes/footer.php"); ?>