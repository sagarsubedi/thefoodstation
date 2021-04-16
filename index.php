<?php 
    
    include 'header.php';
    function getTitle(){return "The Food Station";}
?>

    <!-- Features section -->
    <!-- we will be using Bootstrap Grid system for rows and columns -->
    <section id="hero">

        <div class="container">

            <div class="row">
                
            <!-- column two -->
                <div class="col img-col">
                    <img src="./assets/fast-food.svg" alt="hamburger" class="img-fluid">

                </div>
                <!-- end of column two -->

                <div class="col">

                    <h1>Hungry?<br>Order with us!</h1>
                    <p>
                        The Food Station is a web application build using modern web technologies. <br>
                        Considering how busy people are and how cold it is outside, we built this project
                        so that people can order food online from the comfort of their home without paying
                        heavy fees.
                    </p>
                    <button type="button" action="order.php" onclick="window.location.href='restaurants.php'" class="btn btn-tomato btn-lg">Order Now!</button>
                </div> 
                <!-- end of column one -->
                
 


            </div>
            <!-- end of row 1 -->


            <!-- start another row for About Us section -->
            <div class="row cards">

                <!-- Start of column 1 -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="./assets/easy.svg" alt="easy" class="icon" />
                            <h5 class="card-title">EASY</h5>
                            <p class="card-text"> Order from the comfort of your home with a few touch on the screen.</p>
                        </div>
                    </div>
                </div>
                <!-- end of column 1 -->

                <!-- Start of column 2 -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="./assets/fast.svg" alt="fast" class="icon" />
                            <h5 class="card-title">FAST</h5>
                            <p class="card-text">Fastest delivery services. Order now and get within 30 minutes.</p>
                        </div>
                    </div>
                </div>
                <!-- end of column 2 -->

                <!-- Start of column 3 -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="./assets/cheaper.svg" alt="cheaper" class="icon" />
                            <h5 class="card-title">Better Price</h5>
                            <p class="card-text">Looking for best quality food for good price? We offer the best food for best prices.</p>
                        </div>
                    </div>
                </div>
                <!-- end of column 3-->


            </div>
            <!-- end of row 2 -->

        </div>
        <!-- end of a container -->
        <img src="./assets/wave.png" alt="wave" class="bottom-wave-hero">
    </section>

    <!-- end of Features  section-->


    <!-- About section -->
    <section id="about-us">
    
        <div class="container">
            
            <!-- start row 1 -->
            <div class="row align-items-center">

                <div class="col">
                    <img src="./assets/team.svg" alt="team_members" class="img-fluid"  />
                </div>
                <!--  end of column 1 -->

                <div class="col">

                    <h1>About Us</h1>
                    <p>We are a team of 3 friends - Yousef, Saud and Mohammed - working and learning together. We wanted to deliver a simple food ordering app
                    that will help people order food without spending more money than they should. <br> <br> We developed this project as the final project
                    for out Database design class and we are proud of what we have achieved. We wish you have a very enjoyable experience using our web application. </p>
                
                </div>
                <!--  end of column 2 -->

            </div>
            <!--  end of row 1 -->

        </div>
        <!--  end of container -->

    </section>
    <!-- End of About Section -->


    <!-- Start of Contact section -->
    <section id="contact-us">

        <div class="container">

            <div class="row align-items-center">



                <!-- image for contact us -->
                <div class="col img-contact">
                    <img src="./assets/mail.png" alt="Contact Us">              
                </div>
                <!-- end of column 2 -->

                <!-- form box -->
                <div class="col">
                    
                    <div id="wrapper">
                        <h1>Contact Us</h1>
                        <form>
                            <div class="form-floating mb-5">
                                <input type="email" class="form-control w-75" id="floatingInput" placeholder="test@test.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <a id="contact-send" class="btn btn-danger">Send</a>
                        </form>

                    </div>

                </div>
                <!-- end of column 1  -->                
            
            </div>
            <!-- end of row 1 -->
        
        </div>
         <!-- end of container  -->
         <img src="./assets/wave.png" alt="wave" class="bottom-wave-contact">
    </section>
    <!-- End of Contact Us section -->


    <div class="bottom text-center">
        <a href="#top"><img src="./assets/up-arrow.png" alt="GoUp" class="img-up" /></a>
    </div>

    <script>
        // get the DOM elements and add event listener
        const send =  document.getElementById("contact-send");
        const message = document.getElementById("exampleFormControlTextarea1");
        const em = document.getElementById("floatingInput");
        send.addEventListener("click", function(){
            // if no values on either of them
            // don't take to #hero section. Stay there and alert a message
            if(em.value=="" || message.value=="" || !(em.value.includes("@")) ) {
                send.setAttribute("href", "index.php#contact-us");
                alert("Please enter both email and a message correctly!");
                
                
            }else{     
                // if email and message typed then alert and send to the top
                send.setAttribute("href", "index.php#hero");      
                alert("Thank you for contacting us. You will be receiving an email shortly.");
                message.value="";
                em.value="";
                
            }

        } );
    </script>



<?php include 'footer.php'; ?>

