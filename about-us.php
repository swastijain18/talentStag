<?php
include 'head.php';
?>

    <section class="about-us py-2" id="about-us">
        <div class="container mt-5">
        <h1 style="margin-top:1rem; color:#ff771d">Welcome!</h1>
            <div class="row">
                
            <div class="col-md-6">
           
                    <h2>Know More About Us</h2>
                    <img src="https://hire.pantheondigitals.com/img/2.png" class="img-fluid">
     
                </div>
                <div class="col-md-6">

                <h2 class="mx-5"  style="text-align:left;"><b>TRANSFORM YOUR THOUGHTS INTO REALITY</b></h2><br>
                        <h3 class="mx-5" style="color:#ff771d;">Enjoy results unparalleled for your business.</h3><br>
                        <p class="mx-5" style="text-align: justify; "><b>Talent Innovator</b> is the largest recruitment service provider with a pool of qualified contractual project managers, designers, software developers, finance and accounting experts, digital marketing experts etc. We are your trusted solution for top quality efficient services executed by the experts. Freelancer! We help start-ups, companies, enterprises and agencies to simplify their processes with the best outsourcing experience and low cost. Share your needs today to find the best fit for you!
                        </p>

                    
                </div>
                
            </div>
        </div>
    </section>


    
    
    <section class="about-us py-5 " id="about-us">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">

                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>

                    <button class="btn my-2 my-sm-0 px-4 py-2" onclick="location.href=e" type="submit" style="background-color:#ff771d;"> <a
                            type="button" style="color:white;text-decoration: none;" href="service.php">Let's Know
                            More</a></button>
                </div>
                <div class="col-md-6">
                    <img src="http://themebubble.com/demo/marketingpro/wp-content/uploads/2016/10/seo-slide.png "
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end form --> 

    
    <!-- footer -->
    <?php
include 'footer.php';
?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- owl-carousel end -->
    <script>
        let question = document.querySelectorAll(".question");

        question.forEach(question => {
            question.addEventListener("click", event => {
                const active = document.querySelector(".question.active");
                if (active && active !== question) {
                    active.classList.toggle("active");
                    active.nextElementSibling.style.maxHeight = 0;
                }
                question.classList.toggle("active");
                const answer = question.nextElementSibling;
                if (question.classList.contains("active")) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = 0;
                }
            })
        })

    </script>
</body>

</html>