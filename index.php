<?php include("includes/header.php"); ?>

<!-- Carousel -->
<div id="home-carousel" class="carousel slide" data-bs-ride="carousel"> <?php echo writeCarousel() ;?>
  <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
  <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
</div>
<!-- End Carousel --> 

<!-- Data Section -->
<div class="container"> 
  <!-- 1st Row -->
  <div class="row"> 
    <!-- Director's Message -->
    <div class="col-sm-12 col-md-6 mt-4">
      <div class="card bg-verylightpurple h-100">
        <div class="card-header m-0"> Message from Director </div>
        <div class="card-body">
          <div class="row">
            <div class="col-6 col-md-4"><img class="img-fluid rounded-2" src="images/director.jpg" alt=""> </div>
            <div class="col-6 col-md-8 d-flex align-items-center">
              <p class="bg-orange px-3 py-2 rounded-2 name">Prof. Honey John<br>
                <span class="designation">Director</span></p>
            </div>
          </div>
          <p class="mt-4">Inter University Center for Nanomaterials and Devices (IUCND) have grown substantially since its origin in the year 2010. International and Inter University Centre for Nanomaterials and Devices have progressively come to occupy an exceptional position in CUSAT in a short span of time, based on its research and academic activities in the field of Nanotechnology ad Nanoscience. The Centre with its advanced research facilities provides a well-established platform for the students to carry out their research activities. Here we focus on boosting inter disciplinary research in the field of Nanotechnology, co-ordinated by a well experienced pool of faculty members from various departments of CUSAT. Our students are enthusiastic about the development of innovative technology in the field of nanoscience and aspire to make a long-term universal impact. They associate with many worldwide renowned scientists through conferences, seminars, workshops and other activities. I am honored to be part of such an institution that motivated advanced research and innovative ideas that will create a new generation of vibrant researchers for the benefit of society and futuristic technology.</p>
        </div>
      </div>
    </div>
    <!-- End Director's Message --> 
    <!-- Upcoming Events -->
    <div class="col-sm-12 col-md-6 mt-4">
      <div class="card bg-verylightpurple h-100">
        <div class="card-header m-0"> Upcoming Events </div>
        <div class="card-body"> <img class="img-fluid rounded-2" src="images/isimee-header.webp" alt="Isimee Header image">
            <h5 class="mt-3">
                <strong>International Symposium on Innovative Materials for Energy and Environment 2024</strong>
            </h5>
          <p class="mt-3">The <strong>International Symposium on Innovative Materials for Energy and Environment
                  (IMEE-2024)</strong>, organized under the SPARC-funded project 'LIFE - Leveraging Integrated Systems for Future Energy', aims to foster collaboration among researchers, scientists, and industry experts to address critical challenges in energy and environmental sustainability. Hosted by IUCND in collaboration with Flinders University, Australia, the National Institute of Technology, Calicut, and St. Teresa’s College, Ernakulam, the symposium will feature keynote lectures by global experts, panel discussions, technical sessions, and interactive poster presentations. Supported by the Scheme for Promotion of Academic and Research Collaboration (SPARC), and Anusandhan National Research Foundation (ANRF) this event offers a unique platform for networking and knowledge exchange. For program details, registrations, and updates, visit the IMEE-2024 website.</p>
          <a class="button rounded-pill orangebutton float-end" href="https://isimee2024.com/" target="_blank">IMEE-2024 website</a> </div>
      </div>
    </div>
    <!-- End Upcoming Events --> 
    
  </div>
  <!-- End 1st Row --> 
  <!-- Latest News -->
  <div class="col-12 mt-4">
    <div class="card bg-verylightpurple">
      <div class="card-header"> Latest News </div>
      <div class="card-body"> 
        <!-- Latest News Slider -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <!-- Latest News 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-12 col-md-7"> <img class="img-fluid rounded-2 w-100" src="images/latestnews_01.jpg" alt=""> </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0 align-self-center">
                  <p class="newsheadline">CUSAT VC Launches International Nanotechnology Conference Website </p>
                  <a class="button rounded-pill orangebutton" href="http://www.newsexperts.in/cusat-vc-launches-international-nanotechnology-conference-website/" target="_blank">Read More</a> </div>
              </div>
            </div>
            <!-- End Latest News 1 -->
            
            <!-- Latest News 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-12 col-md-7"> <img class="img-fluid rounded-2 w-100" src="images/latestnews_02.jpg" alt=""> </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0 align-self-center">
                  <p class="newsheadline">CUSAT Resesarch Team Develops Device to Generate Power from Human Movements</p>
                  <a class="button rounded-pill orangebutton" href="https://www.newsexperts.in/cusat-research-team-develops-device-generate-power-human-movements/" target="_blank">Read More</a> </div>
              </div>
            </div>
            <!-- End Latest News 2 -->
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
        </div>
        <!-- End Latest News Slider --> 
      </div>
    </div>
  </div>
  <!-- End Latest News --> 
  
  <!-- Home Special Menu -->
  <div class="row">
    <div class="col-sm-6 col-md-3 mt-4">
      <div class="card"><a href="research.php" class="home-bigmenu"><img class="" src="images/icon-research.png" alt="Research Icon">Research</a> </div>
    </div>
    <div class="col-sm-6 col-md-3 mt-4">
      <div class="card"><a href="people.php" class="home-bigmenu"><img class="" src="images/icon-people.png" alt="People Icon">People</a> </div>
    </div>
    <div class="col-sm-6 col-md-3 mt-4">
      <div class="card"><a href="courses.php" class="home-bigmenu"><img class="" src="images/icon-courses.png" alt="courses Icon">Courses</a> </div>
    </div>
    <div class="col-sm-6 col-md-3 mt-4">
      <div class="card"><a href="contact.php" class="home-bigmenu"><img class="" src="images/icon-contact.png" alt="contact Icon">Contact</a> </div>
    </div>
  </div>
  <!-- End Home Special Menu  --> 
</div>
<!-- End Data Section -->

<?php include("includes/footer.php"); ?>
