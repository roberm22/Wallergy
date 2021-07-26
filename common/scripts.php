
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- FlexSlider -->
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/pluginScript.js"></script>

<!-- JS Files -->
<script src="../template/aos.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../template/glightbox/js/glightbox.min.js"></script>
<script src="../template/isotope.pkgd.min.js"></script>
<script src="../template/purecounter.js"></script>
<script src="../template/swiper-bundle.min.js"></script>
<script src="../template/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="../template/main.js"></script>

<!-- Table -->
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

<script>
    $(document).ready(function () {
        let current_location = window.location.href.split('/');
        let page;
        page = current_location[current_location.length - 1];
        $('.navbar ul li a').removeClass('active');
        $('.navbar a[href*="' + page + '"]').addClass('active');
    })
</script>