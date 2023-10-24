<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">Securex</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="#" class="nav-item nav-link">Home</a>
            <a href="#AboutUs" class="nav-item nav-link">About</a>
            <a href="#Services" class="nav-item nav-link">Service</a>
            <a href="#WhyChooseUs" class="nav-item nav-link">Why Choose Us</a>
            <a href="#Contact" class="nav-item nav-link">Contact</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center bg-dark d-none">
            <a href="#Quote" class="nav-link">Request A Quote</a>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function () {
        // console.log('hi');
        $(".navbar-nav a").on("click", function () {
            $(".navbar a").removeClass("active");
            $(this).toggleClass("active");
        });
    });
</script>