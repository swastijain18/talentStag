<?php
include 'head.php';
?>
     <section class="about-us py-3" id="service-us">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-6">
           
                    <h2>What We Provide</h2>
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
    <!-- end form -->


    <!-- process of recruitment -->
 <section>
    <h2 class="text-center my-5" style="color:#ff771d">Process Of Hiring</h2>
    <div class="d-flex justify-content-center">
   

    <div class="card mx-4 process1" style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:10rem; box-shadow: 2px 2px 10px #cfcdcd" >
    <i class="fa fa-search fa-3x" style="color:#ff771d" aria-hidden="true"></i>
        <div class="card-body" >
            <p class="card-text text-center">You Communicate Your Needs</p>
            

        </div>
    </div>
    <i class="fa fa-long-arrow-right fa-3x"></i>
    <div class="card  mx-4 process2" style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:10rem; box-shadow: 2px 2px 10px #cfcdcd" >
        <div class="card-body" >
            <p class="card-text text-center">You Communicate Your Needs</p>
            
        </div>
    </div>

    <div class="card mx-4 process3" style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:10rem; box-shadow: 2px 2px 10px #cfcdcd" >
        <div class="card-body" >
            <p class="card-text text-center">You Communicate Your Needs</p>
           
        </div>
    </div>

    <div class="card mx-4 process4" style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:10rem; box-shadow: 2px 2px 10px #cfcdcd" >
        <div class="card-body" >
            <p class="card-text text-center">You Communicate Your Needs</p>
            

        </div>
    </div>

    <div class="card mx-4 process5" style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:10rem; box-shadow: 2px 2px 10px #cfcdcd" >
        <div class="card-body" >
            <p class="card-text text-center">You Communicate Your Needs</p>
            

        </div>
    </div>
    </div>

    </section>


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