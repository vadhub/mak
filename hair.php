<?php include "header.php" ?>
<div class="container text-center">
  <span class="placeholder col-12 bg-light"></span>
  <div class="grid">
    <a data-fancybox="gallery" href="pictures/gallery/hair/g1.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g1_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g2.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g2_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g3.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g3_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g4.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g4_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g5.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g5_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g6.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g6_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g7.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g7_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g8.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g8_1.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g9.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g9_1.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g10.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g10_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g11.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g11_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g12.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g12_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g13.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g13_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g14.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g14_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/hair/g15.jpg">
        <img class="img-fluid" src="pictures/gallery/hair/g15_1.jpg" alt="">
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
