<?php require('./layout/header.php') ?>
<header>
    <div class="header__div__wave" style="overflow: hidden;">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
        </svg>
      <!-- <svg viewBox="0 0 500 150"
        preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C212.18,146.55 277.09,-9.36 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
          style="stroke: none; fill: #fff;"></path>
      </svg> -->
    </div> 
      
  </header>
  
  <div class="contenedor_cuerpo">
    <div class="marcas">
      <div class="marcas__flex"><img id="Chevrolet_logo" src="img/Chevrolet_logo(1).svg" alt=""></div>
      <div class="marcas__flex"><img id="Dodge_logo" src="img/Dodge_logo(1).svg" alt="" width="80px"></div>
      <div class="Ferrari-Logo"><img id="Ferrari-Logo" src="img/Ferrari-Logo(1).svg" alt=""></div>
      <div class="BMW-logo"><img id="BMW-logo" src="img/BMW-logo(1).svg" alt=""></div>
      <div class="marcas__flex"><img id="corvette-logo" src="img/Volkswagen_logo1.svg" alt=""></div>
    </div>
    <div class="contenedor__slogan">
      <h1>Lorem ipsum dolor sit amet consectetur.</h1>
      <p class="texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, quas?</p>
    </div>
    <div class="section"></div>
    <div class="contenedor__oscuro">
      <h1 style="color: #fff; padding-left: 30px;">Example heading <span class="badge bg-secondary">New</span></h1>
      <p style="padding: 30px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, quas?</p>
      <div class="contenedor__cards">
        <div class="row row-cols-1 row-cols-md-3 g-5">
          <div class="col">
            <div class="card w-100 h-100 text-bg-dark mb-3 border-light" style="width: 18rem;">
              <img src="img/card-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.</p>
                <a href="#" class="btn btn-light">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card w-100 h-100 text-bg-dark mb-3 border-light" style="width: 18rem;">
              <img src="img/card-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.</p>
                <a href="#" class="btn btn-light">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card w-100 h-100 text-bg-dark mb-3 border-light" style="width: 18rem;">
              <img src="img/card-3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.</p>
                <a href="#" class="btn btn-light">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section2"></div>
    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
          </div>-->
  </div>
  <!-- <div class="contenedor__footer">
    <div class="fila">
    <div class="col-5">
      <h2 id="Titulos__footer">Lorem ipsum dolor sit.</h2>
      <p id="parrafo-_footer">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium libero ullam, sint inventore saepe
        impedit. Eum debitis quia est. Iusto, et aliquid amet laborum laboriosam quo itaque earum repellendus?
      </p>
    </div>
    <div class="col-5">
      <h2 id="Titulos__footer">Lorem ipsum dolor sit.</h2>
      <p id="parrafo-_footer">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium libero ullam, sint inventore saepe
        impedit. Eum debitis quia est. Iusto, et aliquid amet laborum laboriosam quo itaque earum repellendus?
      </p>
    </div>
    <div class="col-5">
      <h2 id="Titulos__footer">Lorem ipsum dolor sit.</h2>
      <p id="parrafo-_footer">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil praesentium libero ullam, sint inventore saepe
        impedit. Eum debitis quia est. Iusto, et aliquid amet laborum laboriosam quo itaque earum repellendus?
      </p>
    </div>
  </div>
  </div> -->
 <!-- Footer -->
 <footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Contactanos en nuestras Redes Sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Wolfars
          </h6>
          <p>
            <img src="img/logo-removebg-preview (5).png" class="d-block w-100" alt="...">
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links 
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright: "Darkar Company" 
    <a class="text-reset fw-bold" href="https://darkarmadrid.github.io/wolfar/">https://darkarmadrid.github.io/wolfar/</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>