<?php require_once('includes/header.php'); ?>
    <main>
        <div class="container mb-5 pt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
                </ol>
            </nav>
        </div>

        <section>
            <div class="container">
                <h2>Carrinho</h2>
                <div class="underscore-title"></div>

                <table class="table table-carrinho">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Produtos</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><i class="bi bi-x-circle-fill me-2"></i><img src="/img/serra-mrmore-110-mm-1200-watts-220v-m0400b-makita_1_1614174069.webp" width="40px" alt=""></th>
                            <td><a href="produto-detalhe.php">Serra marmore Makita</a></td>
                            <td>400 R$</td>
                            <td>1</td>
                            <td>400 R$</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>


<?php require_once('includes/footer.php'); ?>