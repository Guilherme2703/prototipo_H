<?php require_once('includes/header.php'); ?>
    
    <!-- carousel -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide carousel-home" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                    <div class="container">
                        <h2 class="mb-5">Hender,<br>seu parceiro na construção!</h2>
                        <a href="#" class="btn-carousel">Ver mais</a>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                    <div class="container">
                        <h2 class="mb-5">Ferramentas que constroem <br> seus sonhos!</h2>
                        <a href="#" class="btn-carousel">Ver mais</a>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                    <div class="container">
                        <h2 class="mb-5">Equipando suas ideias,<br>construindo seu futuro!</h2>
                        <a href="#" class="btn-carousel">Ver mais</a>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- Novidades -->
    <section class="novidades">
        <div class="container my-5">
            <h2 class="text-gradient">Novidades</h2>
            <div class="underscore-title"></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 mb-5 mt-2">
                <?php for ($i = 0; $i < 4; $i++){
                  require('includes/components/produto-item.php');
                } 
                ?>
            </div>
        </div>
    </section>

    <!-- bg-image -->
     <section>
      <div class="bg-image">
        <div class="bg-image-mask">
          <div class="container">
            <div class="bg-image-text">
              <h2>Segurança na compra, no <br> seu conforto</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quibusdam voluptatibus inventore.</p>
            </div>
          </div>
        </div>
      </div>
     </section>

     <!-- categoria -->
     <section class="categoria">
      <div class="container">
          <h2 class="text-gradient">Comprar por categoria</h2>
          <div class="underscore-title"></div>
          <div class="row row-cols-1 row-cols-md-3 mb-5 mt-4 gap-md-0">
              <?php for ($i = 0; $i < 3; $i++){
                require('includes/components/categoria-item.php');
              } 
              ?>
          </div>
      </div>
    </section>

    <!-- promoção -->
    <section class="promocao">
      <div class="container my-5">
          <h2 class="text-gradient">Em promoção</h2>
          <div class="underscore-title"></div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 mb-5 mt-2">
              <?php for ($i = 0; $i < 4; $i++){
                require('includes/components/promocao-item.php');
              } 
              ?>
          </div>
      </div>
  </section>


<?php require_once('includes/footer.php'); ?>