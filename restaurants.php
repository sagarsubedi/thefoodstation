<?php include 'header.php'; function getTitle(){return "TFS - Restaurants";}?>


    <section id="banner-restaurant">
        <div class="container">

            <div class="row gy-3">
                <h1 class="h1-with-margin">Choose from</h1>
            </div>

            <!-- first row -->
            <div class="row gy-3">

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/restaurant.svg" class="card-img-top" alt="McDonalds">
                        <div class="card-body">
                            <h5 class="card-title">McDonalds</h5>
                            <p class="card-text">Get freshly made, rightly-priced fast-food from McDonalds within a few minutes right to your doorstep.
                            </p>
                            <a href="mcdonalds.php"> <img src="./assets/cart.svg" alt="" class="order-img"> </a>
                        </div>
                    </div>
                    <!-- card 1 ends here. -->
                </div>  
                <!-- end of column1 -->

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/restaurant.svg" class="card-img-top" alt="Nepali">
                        <div class="card-body">
                            <h5 class="card-title">Hamro Nepali Restaurant</h5>
                            <p class="card-text">Get freshly made authentic Nepali food from Hamro Nepali Restaurant within a few minutes right to your doorstep.</p>
                            <a href="nepali_rest.php"> <img src="./assets/cart.svg" alt="" class="order-img"> </a>
                        </div>
                    </div>
                    <!-- card 1 ends here. -->
                </div>  
                <!-- end of column1 -->


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/restaurant.svg" class="card-img-top" alt="Arabic">
                        <div class="card-body">
                            <h5 class="card-title">Arabic Restaurant<h5>
                            <p class="card-text">Get freshly made authentic Arabic food from Arabic Restaurant within a few minutes right to your doorstep.</p>
                            <a href="arabic_rest.php"> <img src="./assets/cart.svg" alt="" class="order-img"> </a>
                        </div>
                    </div>
                    <!-- card 1 ends here. -->
                </div>  
                <!-- end of column1 -->



            </div>
            <!-- end of first row -->

            <br>



        </div>
        <!-- end of container -->
    </section>
    <!-- end of section -->




<?php include 'footer.php'; ?>