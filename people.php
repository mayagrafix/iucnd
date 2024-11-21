<?php include("includes/header.php"); ?>

<!-- Data Section -->
<div class="container"> 
  <!-- Faculty Grid -->
  <div class="col-12 mt-4">
    <div class="card bg-verylightpurple">
      <div class="card-header"> faculty </div>
      <div class="card-body">
        <div class="row row-cols-1 row-cols-md-5 g-4"> <?php echo writeFacultyGrid();?> </div>
      </div>
    </div>
  </div>
  <!-- End Faculty Grid --> 
  
  <!-- Post Doctoral Fellows -->
  <div class="col-12 mt-4">
    <div class="card bg-verylightpurple">
      <div class="card-header"> Post-Doctoral Fellows </div>
      <div class="card-body">
        <div class="row row-cols-1 row-cols-md-5 g-4"> <?php echo writeResearchScholars ("postdoctoralfellows.csv");?> </div>
      </div>
    </div>
  </div>
<!-- End Post Doctoral Fellows --> 

<!-- Research Scholars -->
<div class="col-12 mt-4">
  <div class="card bg-verylightpurple">
    <div class="card-header"> Research Scholars </div>
    <div class="card-body">
      <div class="row row-cols-1 row-cols-md-5 g-4"> <?php echo writeResearchScholars ("researchscolars.csv");?> </div>
    </div>
  </div>
</div>

<!-- End Research Scholars -->
	
	
<!-- Alumni -->
<div class="col-12 mt-4">
  <div class="card bg-verylightpurple">
    <div class="card-header"> Alumni </div>
    <div class="card-body">
      <div class="row row-cols-1 row-cols-md-5 g-4"> <?php echo writeResearchScholars ("alumni.csv");?> </div>
    </div>
  </div>
</div>

<!-- End Alumni -->

</div>
<!-- End Data Section -->

<?php include("includes/footer.php"); ?>
