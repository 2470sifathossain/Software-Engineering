<?php include 'inc/header.php';?>

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Math</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                <img src="images/math1.jpg" alt="" />
                <h2>Goniter Ronge Hashi Khushi Gonit</h2>
                <h4>Author - Chamak Hasan</h4>
                <h4>Available</h4>
                <p><span class="price">BDT 50</span></p>

            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <img src="images/math2.jpg" alt="" />
                <h2>Gonit Korbo joy</h2>
                <h4>Author - Tamim Shahariar Subin</h4>
                <h4>Available</h4>
                <p><span class="price">BDT 98</span></p>

            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <img src="images/math3.jpg" alt="" />
                <h2>Bigganer Eksho Mojar Khela</h2>
                <h4>Author - Muhammad Jafar Ikbal</h4>
                <h4>Available</h4>
                <p><span class="price">BDT 30</span></p>

            </div>

        </div>



    </div>
</div>
</div>
<?php include 'inc/footer.php';?>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

