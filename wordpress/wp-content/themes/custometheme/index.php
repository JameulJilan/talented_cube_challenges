<?php get_header(); ?>

<body>
    <section id="products" class="mt-5 container bg-white">
        <h1 class="text-center">Products</h1>
        <section id="product_list" class="mt-5">
            <div class="row">
                <div class="col-12 col-md-3 p-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Housing Insurance</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#">Read More></a>
                        </div>
                    </div>
                </div>
                <div class="col p-0 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vehicle Insurance</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#">Read More></a>
                        </div>
                    </div>
                </div>
                <div class="col p-0 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Travel Insurance</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#">Read More></a>
                        </div>
                    </div>
                </div>
                <div class="col p-0 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Health Insurance</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="#">Read More></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <section id="corporate-plan" class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-8 jumbotron">
                <h1>Looking For A Corporate Plan?</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus odio illum quis et,
                    dolores
                    pariatur ducimus sint iste dolorum, ipsam, optio consectetur! Molestias facilis, assumenda nihil officiis
                    libero
                    inventore nostrum architecto obcaecati debitis facere.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
            <div class="col-4 jumbotron">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/corporate.png" class="img-rounded" alt="Cinque Terre">
            </div>
        </div>
    </section>

    <section id="our-clients" class="container mt-5">
        <h1 class="text-center">Our Clients</h1>
        <section id="client-list" class="mt-5">
            <div class="row">

                <div class="col-12 col-md-4 mt-3">
                    <div class="card bg-light">
                        <div class="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/clients/client_1.png" height="40px">
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 mt-3">
                    <div class="card bg-light">
                        <div class="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/clients/client_2.png" height="40px">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-3">
                    <div class="card bg-light">
                        <div class="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/clients/client_3.png" height="40px">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-3">

                <div class="col-12 col-md-4 mt-3">
                    <div class="card bg-light">
                        <div class="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/clients/client_4.png" height="40px">
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 mt-3">
                    <div class="card bg-light">
                        <div class="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/clients/client_5.png" height="40px">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-3">
                    <div class="card bg-light">
                        <div class="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/clients/client_6.png" height="40px">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>
</body>
<?php get_footer(); ?>