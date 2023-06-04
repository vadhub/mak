<?php include "header.php" ?>
<div class="container text-center">
  <span class="placeholder col-12 bg-light"></span>
  <div class="grid">
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g1.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g1_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g2.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g2_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g3.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g3_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g4.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g4_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g5.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g5_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g6.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g6_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g7.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g7_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g8.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g8_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g9.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g9_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g10.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g10_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g11.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g11_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/mens_hair/g12.jpg">
        <img class="img-fluid" src="pictures/gallery/mens_hair/g12_1.jpg" alt="">
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
