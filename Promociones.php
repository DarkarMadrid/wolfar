<?php require('./layout/header.php') ?>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <hr>
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
    
  </div>

  <?php require('./layout/footer.php') ?>