<?php include "header.php" ?>
<div class="container text-center">
  <span class="placeholder col-12 bg-light"></span>
  <div class="grid">
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g1.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g1_1.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g2.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g2_1.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g3.png">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g3_1.png" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g4.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g4_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g5.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g5_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g6.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g6_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g7.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g7_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g8.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g8_1.jpg" alt="">
    </a>
    <a data-fancybox="gallery" href="pictures/gallery/cosmetic/g9.jpg">
        <img class="img-fluid" src="pictures/gallery/cosmetic/g9_1.jpg" alt="">
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
