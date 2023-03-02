<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quote</title>
    <?php include("common/head.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/jquery@3.6.0/dist/jquery.min.js"></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <?php include("common/topbar.php"); ?>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <?php include("common/navbar.php"); ?>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Free Quote</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Free Quote</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/quote.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-5">Free Quote</h1>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <form method="post" name="myForm" onsubmit="return validateForm();">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name='email' class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phone" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" name="service" style="height: 55px;">
                                        <option selected disabled>Select A Service</option>
                                        <option value="CCTV_System">CCTV System</option>
                                        <option value="Finger_Print_Access">Finger Print Access</option>
                                        <option value="Fire_Detection_and_Safety">Fire Detection and Safety</option>
                                        <option value="Burglar_Alarm">Burglar Alarm</option>
                                        <option value="Intercom_System">Intercom System</option>
                                        <option value="Wirless_Smart_Camers">Wirless Smart Camers</option>
                                        <option value="Smart_Home_Security">Smart Home Security</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="note" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Get A Free Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    <!-- Footer Start -->
    <?php include("common/footer.php"); ?>
    <!-- Footer End -->
    <!-- Copyright Start -->
    <?php include("common/copyright.php"); ?>
    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <?php include("common/commonscripts.php"); ?>
</body>

</html>
<script>
    function validateForm() {
        var name = document.forms["myForm"]["name"].value;
        var phone = document.forms["myForm"]["phone"].value;
        var email = document.forms['myForm']['email'].value;
        var email = document.forms['myForm']['service'].value;
        var email = document.forms['myForm']['note'].value;
        var regex = /^\d{10}$/;

        if (name == "") {
            swal({
                title: "Oops!!",
                text: "Please Enter Your Name!!!",
                icon: "info",

            });
            //alert("Please Enter Your Name!");
            return false;
        } else if (phone == "") {
            swal({
                title: "Oops!!",
                text: "Please Enter Your Phone Number!!!",
                icon: "info",

            });
            //alert("Please Enter Your Phone Number");
            return false;
        } else if (!regex.test(phone)) {
            swal({
                title: "Oops!!",
                text: "Plese Enter a Vaild Phone Number!!!",
                icon: "info",

            });
            //alert("Plese Enter a Vaild Phone Number");
            return false;
        } else {
            var xhr = new XMLHttpRequest(); // create a new XHR object
            forms.addEventListener("submit", function(event) { // add an event listener to the form to handle the submission
                event.preventDefault(); // prevent the default form submission
                var data = new FormData(forms); // create a new FormData object from the form data
                console.log(data);
                //xhr.send(data); // send the request with the form data
            });

            // xhr.open("POST", "crud.php"); // specify the URL you want to send the request to
            // xhr.onload = function() { // define a function to handle the response when it's received
            //     if (xhr.status === 200) { // check if the response was successful
            //         console.log(xhr.responseText); // do something with the response (e.g., display it in the console)
            //     } else {
            //         console.log("Request failed with status: " + xhr.status); // handle errors
            //     }
            // };
            //return true;
        }

    }
</script>