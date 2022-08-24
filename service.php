<?php
include 'head.php';
?>

<style>
    .arrow {
        margin-top: 3.5rem;

    }

    @media only screen and (max-width:600px) {
        .respo-proc {
            flex-direction: column;
            align-items: center;

        }

        .arrow {
            margin-top: 0rem;
            transform: rotate(90deg);
            margin: 10px;
        }

        .resp-out {
            flex-direction: column;
        }

        .type-text1 {
            margin-left: 0rem;
            margin-right: 2rem;
        }
        .res-out{
            flex-direction: column;
        }
    }

    .type-icon {
        background-color: white;
        border: 1px solid #ff771d;
        padding: 1.3rem;
        border-radius: 50%;
        margin-top: 2rem;
        z-index: 10;

    }

    #left {
        margin-left: -2.2rem;
        z-index: 1;

    }

    #right {
        margin-right: -2.2rem;
        z-index: 1;
        margin-left: 5rem;
    }

    .type-text1 {
        font-size: 13px;
        background-color: #62b5e5;
        padding: 1.5rem 3rem;
        border-radius: 80px 15px 15px 80px;
        margin-right: 40px;
    }

    .type-text2 {
        font-size: 13px;
        background-color: #ff771d;
        padding: 1.5rem 3rem;
        border-radius: 15px 80px 80px 15px;
        margin-left: 40PX;
    }

    .out-box {
        background-color: rgba(128, 128, 128, 0.129);
        padding: 1rem;
        margin: 1rem;
        border-radius: 10px;
        font-size: 14px;
        box-shadow: 2px 2px 15px #cfcdcd;
        z-index: -1;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .out-type {
        flex-direction: row;
        margin-right: 0px;
        margin-left: 0px;
    }
</style>


<section class="about-us py-3" id="service-us">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <img src="img/serv-img.jpg" class="img-fluid">

            </div>
            <div class="col-md-5">

                <h2 class="mx-5" style="text-align:left;"><b>We have a community eager to join you. Hire in simple
                        steps</b></h2><br>

                <h5 class="mx-5" style="color:#ff771d;">Recruitment is a challenge nowadays, with a pool of candidates
                    willing to work with their own rules and expectations.</h5><br>
                <p class="mx-5" style="text-align: justify; ">At,<b>Talent Stag</b> we offer an on-demand recruitment
                    service that is
                <ul class="mx-5">
                    <li>&#8226; Hassle-free,</li>
                    <li>&#8226; in line with your budget plan, and</li>
                    <li>&#8226; meets your requirements.</li>
                </ul>

                </p>
                <p class="mx-5">Get access to the best people that are willing to work with you.</p>
            </div>

        </div>
    </div>
</section>
<!-- end form -->


<!-- process of recruitment -->
<section>
    <h2 class="text-center my-5" style="color:#ff771d">Process Of Hiring</h2>
    <div class="d-flex justify-content-center respo-proc">


        <div class="card mx-4 process1"
            style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:11rem; height: 11rem; box-shadow: 2px 2px 10px #cfcdcd">

            <div style="color:#ff771d; max-width:100%; text-align:center; margin-top:10px"><i class="fa fa-phone fa-2x"
                    aria-hidden="true"></i></div>
            <div class="card-body">
                <p class="card-text text-center">You Communicate Your Needs</p>

            </div>
        </div>
        <div class="arrow">
            <i class="fa fa-long-arrow-right fa-3x"></i>
        </div>

        <div class="card  mx-4 process2"
            style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:11rem; height: 11rem;  box-shadow: 2px 2px 10px #cfcdcd">
            <div style="color:#ff771d; max-width:100%; text-align:center; margin-top:10px"><i class="fa fa-search fa-2x"
                    aria-hidden="true"></i></div>

            <div class="card-body">
                <p class="card-text text-center">We find the best candidate for the job.
                </p>

            </div>
        </div>
        <div class="arrow">
            <i class="fa fa-long-arrow-right fa-3x"></i>
        </div>


        <div class="card mx-4 process3"
            style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:11rem; height: 11rem; box-shadow: 2px 2px 10px #cfcdcd">
            <div style="color:#ff771d; max-width:100%; text-align:center; margin-top:10px"><i class="fa fa-cogs fa-2x"
                    aria-hidden="true"></i></div>
            <div class="card-body">
                <p class="card-text text-center">Talent Stag will handle the screening and testing for you</p>

            </div>
        </div>
        <div class="arrow">
            <i class="fa fa-long-arrow-right fa-3x"></i>
        </div>


        <div class="card mx-4 process4"
            style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:11rem; height: 11rem;  box-shadow: 2px 2px 10px #cfcdcd">
            <div style="color:#ff771d; max-width:100%; text-align:center; margin-top:10px"><i class="fa fa-user fa-2x"
                    aria-hidden="true"></i></div>
            <div class="card-body">
                <p class="card-text text-center">You conduct the interview.
                </p>


            </div>
        </div>
        <div class="arrow">
            <i class="fa fa-long-arrow-right fa-3x"></i>
        </div>

        <div class="card mx-4 process5"
            style="border-radius:50%; background-color:rgba(128, 128, 128, 0.129); width:11rem; height: 11rem;  box-shadow: 2px 2px 10px #cfcdcd">
            <div style="color:#ff771d; max-width:100%; text-align:center; margin-top:10px"><i class="fa fa-users fa-2x"
                    aria-hidden="true"></i></div>
            <div class="card-body">
                <p class="card-text text-center">Complete and onboard your new team member</p>


            </div>
        </div>
    </div>

</section>
<!-- ----------------end------------------ -->



<!-- OUTSOURCING -->
<section class="text-center my-5 mx-3">
    <div class="container">
        <h1><b style="text-decoration: underline;">Outsourcing</b></h1>
        <div class="text-center mx-5">
            <p>Hire a professional to carry out duties, manage operations, or perform services for your business.
                Nowadays, businesses outsource everything from basic to significant activities, across all divisions.
                Some of the primary responsibilities that Talent Stag outsources include:

            </p>
        </div>


        <div class="d-flex res-out">
            <div class="container out-box">
                Customer service and call center operations
            </div>
            <div class="container out-box">
                Financial functions such as bookkeeping and other operations.
            </div>
            <div class="container out-box">
                Marketing professionals such as paid media managers, designers, and more.
            </div>
            <div class="container out-box">
                Information technology services such as programming, application development, and technical support.
            </div>
        </div>

        <h2 class="my-5">Why Outsource with Talent Stag?</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="img/out.png" alt="">
            </div>

            <!-- why choose content -->
            <div class="col-md-6">

                <div class="row">
                    <div class="text-left">
                        <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                    </div>
                    <div class="text-left  col-10">
                        <p class="col-10" style="color: #ff771d;"><b>Efficient communication</b></p>
                        <p class="col-10" style="font-size: 12px;">To improve and escalate methods, we have a collection
                            of
                            robust communication methods.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="text-left">
                        <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                    </div>
                    <div class="text-left col-10">
                        <p class="col-10" style="color: #ff771d;"><b>No hidden and unforeseen costs</b></p>
                        <p class="col-10" style="font-size: 12px;">Reduce your outsourcing costs through our transparent
                            process to establish a trustworthy relationship.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="text-left">
                        <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                    </div>
                    <div class="text-left col-10">
                        <p class="col-10" style="color: #ff771d;"><b>We work with the right approach
                            </b></p>
                        <p class="col-10" style="font-size: 12px;">You are frequently forced to work with individuals
                            who
                            don't fit the goals, specifications, budget limit, timelines, etc. of the services you need
                            to
                            be completed. We ensure that you receive the appropriate outsourcing model that is tailored
                            to
                            your needs.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- --------------------outsourcing----------------------------- -->


<!--------types  of outsourcing------ -->
<section>
    <div class="my-5">
        <h1 class="text-center my-5">Types of Outsourcing</h1>

        <div class="d-flex resp-out">

            <div class="row out-type" style="justify-content: flex-end;">
                <p class="col-6 type-text1"><b>Onshore: </b> Also referred to as domestic outsourcing, it is the process
                    of hiring a service provider outside of a company that is located in the same nation.
                </p>
            </div>

            <div class="row out-type" style="justify-content: flex-start;">
                
                <p class="col-6 type-text2"><b> Offshore: </b> This happens when a business hires a third party to
                    handle a specific task, typically someone who is located abroad or overseas and has expertise in the
                    task.

                </p>

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
