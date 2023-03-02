<div class="container my-5">
    <div class="row d-flex justify-content-between">

        <div class="col-8">
            <div class="card card-dark">
                <div class="card-body">
                    <div class="card-title text-light">
                        Movies
                    </div>
                    <hr class="text-light">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
                            <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
                            <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
                        </ol>
                        <div class="carousel-inner">
                            
                            <?php 
                                 showPopulerArticles();
                            ?>
                            
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            require_once 'sidebar.php'; 
        ?>

    </div>
    
    <div class="row d-flex justify-content-between">

        <div class="col-lg-8">
            <div class="card card-dark">
                <div class="card-body">
                    <h5 class="card-title text-light">
                        Ulasan Berita Blog Kuh
                    </h5>
                    
                    <?php 
                        showPopulerUlasan();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>