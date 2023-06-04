<?php include "header.php" ?>
<div class="container text-center">
  <span class="placeholder col-12 bg-light"></span>
  <div class="grid">
    <a data-fancybox="gallery" href="pictures/gallery/manic/g1.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g1_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g2.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g2_2.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g3.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g3_2.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g4.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g4_2.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g5.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g5_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g6.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g6_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g7.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g7_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g8.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g8_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g9.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g9_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g10.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g10_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g11.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g11_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g12.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g12_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g13.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g13_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g14.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g14_2.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/manic/g15.jpg">
        <img class="img-fluid" src="pictures/gallery/manic/g15_2.jpg" alt="">
    </a>
  </div>
</div>

<script>
    $(function () {
        var options = {
            srcNode: 'img',             // grid items (class, node)
            margin: '15px',             // margin in pixel, default: 0px
            width: '240px',             // grid item width in pixel, default: 220px
            max_width: '',              // dynamic gird item width if specified, (pixel)
            resizable: true,            // re-layout if window resize
            transition: 'all 0.5s ease' // support transition for CSS3, default: all 0.5s ease
        };
        $('.grid').gridify(options);
    });
</script>
<span class="placeholder col-12"></span>
<?php include "footer.php" ?>
