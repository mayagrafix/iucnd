<?php include("includes/header.php"); ?>

<!-- Data Section -->
<div class="container"> 
  <!-- Research -->
  <div class="col-12 mt-4">
    <div class="card bg-verylightpurple">
      <div class="card-header"> Research Infrastructure </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-5"> 
            <!-- Facilities Carousel -->
            <div id="facilitiesCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#facilitiesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#facilitiesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#facilitiesCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#facilitiesCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active"> <img src="images/facilities/facilities_01.jpg" class="rounded-3 d-block w-100" alt="..."> </div>
                <div class="carousel-item"> <img src="images/facilities/facilities_02.jpg" class="rounded-3 d-block w-100" alt="..."> </div>
                <div class="carousel-item"> <img src="images/facilities/facilities_03.jpg" class="rounded-3 d-block w-100" alt="..."> </div>
                <div class="carousel-item"> <img src="images/facilities/facilities_04.jpg" class="rounded-3 d-block w-100" alt="..."> </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#facilitiesCarousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
              <button class="carousel-control-next" type="button" data-bs-target="#facilitiesCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
            </div>
            <!-- End Facilities Carousel --> 
          </div>
          <div class="col-12 col-md-7 mt-4 mt-md-0">
            <p class="m-0">The centre supports research activities of the associate faculty and their research personal by providing facilities such as:</p>
            <ul class="iucnd-list mt-3">
              <li class="">Wet Synthesis laboratory with work benches, rotary evaporator, adequate fume hood, Glove boxes, vacuum lines, Air, N2 gas lines etc.</li>
              <li class="">Instrumentation facility such as diffuse reflectance spectrometer, spin/dip coating facilities, Electrospinning facility and glove boxes. The facility is supported by a 10KVA uninterrupted power supply system for backup power.</li>
              <li class="">IUCND is equipped with advanced research facilities, including an Atomic Force Microscope (AFM) for high-resolution imaging, an electrochemical workstation, a Triboelectric setup with an electrometer for energy harvesting and sensing studies, and a thermal evaporator for thin-film deposition.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Research --> 
</div>
<!-- End Data Section -->

<?php include("includes/footer.php"); ?>
