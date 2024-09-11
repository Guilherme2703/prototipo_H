<?php require_once('includes/header.php'); ?>

    <main>
        <div class="container mb-5 pt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="loja.php"><i class="bi bi-basket text-primary me-1"></i>Loja</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Serra marmore Makita</li>
                </ol>
            </nav>
        </div>

        <!-- Detalhe Produto -->
        <section>
            <div class="container">
                <div class="row gap-4">
                    <div class="col-12 col-md-5 bloco-carousel">
                        <div id="carouselExampleIndicators" class="carousel-detalhe carousel slide">
                            <ol class="carousel-indicators">
                              <p data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="img/serra-mrmore-110-mm-1200-watts-220v-m0400b-makita_1_1614174069.webp" alt="" class="d-block w-100"></p>
                              <p data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="img/serra-marmore1.webp" class="d-block w-100" alt=""></p>
                              <p data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="img/serra-marmore2.webp" class="d-block w-100" alt=""></p>
                              <p data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img src="img/serra-marmore4.webp" class="d-block w-100" alt=""></p>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/serra-mrmore-110-mm-1200-watts-220v-m0400b-makita_1_1614174069.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/serra-marmore1.webp" class="d-block mb-2 w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/serra-marmore2.webp" class="d-block mb-2 w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/serra-marmore4.webp" class="d-block w-100" alt="...">
                                </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-12 col-md-6 detalhe-makita">
                        <div>
                            <h2>Serra marmore Makita</h2>
                            <i class="bi bi-currency-dollar me-2"> 400</i>
                        </div>

                        <form>
                            <label for="colorSelect text-muted mb-3">Cor</label>
                            <select id="colorSelect" class="form-select mb-4">
                                <option selected>Verde</option>
                                <option value="">Preto</option>
                                <option value="">Azul</option>
                                <option value="">Amerelo</option>
                            </select>

                            <div class="d-flex">
                                <input type="number" placeholder="1" class="me-3">
                                <a href="#" class="btn-card">Adicionar</a>
                            </div>
                        </form>

                        <div>
                            <p class="text-muted">Ref: N/D</p>
                            <p class="text-muted">Categoria: <a href="loja.php">Makita</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php require_once('includes/footer.php'); ?>