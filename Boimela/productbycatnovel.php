<?php include 'inc/header.php';?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Novel</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <img src="images/novel1.jpg" alt="" />
					 <h2>Deyal</h2>
					 <h4>Author - Humayun Ahmed</h4>
                     <h4>Available</h4>
					 <p><span class="price">BDT 150</span></p>

				</div>
              <div class="grid_1_of_4 images_1_of_4">
                  <img src="images/novel2.jpg" alt="" />
                  <h2>Maa</h2>
                  <h4>Author - Anisul Haque</h4>
                  <h4>Available</h4>
                  <p><span class="price">BDT 198</span></p>

              </div>
              <div class="grid_1_of_4 images_1_of_4">
                  <img src="images/novel3.jpg" alt="" />
                  <h2>Aamar Bondhu Rashed</h2>
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

