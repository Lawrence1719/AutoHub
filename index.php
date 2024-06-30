<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Auto Hub!</h1>
        <p class="lead">Your one-stop shop for all automotive needs.</p>
        <hr class="my-4">
        <p>Explore our wide range of products, from car parts to accessories.</p>

        <!-- Carousel -->
        <div id="carCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/CarAds.jpg" class="d-block w-100 carousel-image" alt="Car 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Latest Models</h5>
                        <p>Check out the latest car models available.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/CarAds1.jpg" class="d-block w-100 carousel-image" alt="Car 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Best Deals</h5>
                        <p>Find the best deals on used cars.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/CarAds2.jpg" class="d-block w-100 carousel-image" alt="Car 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Trade-In Offers</h5>
                        <p>Trade in your old car for a new one.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Shop Now Button -->
        <a class="btn btn-primary btn-lg mt-4" href="product_list.php" role="button">Shop Now</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>Wide Range of Products</h2>
            <p>Find everything you need for your vehicle in one place.</p>
        </div>
        <div class="col-md-4">
            <h2>Secure Payments</h2>
            <p>Pay safely and securely with our integrated wallet system.</p>
        </div>
        <div class="col-md-4">
            <h2>24/7 Support</h2>
            <p>Our support team is here to help you at any time.</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
