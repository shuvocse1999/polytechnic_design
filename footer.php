<div class="container">
	<div class="col-sm-12 col-12 bg-white p-0 pt-5">
		<img src="frontend/img/footer_top_bg.png" class="img-fluid w-100">
	</div>


	<div class="col-sm-12 col-12 developerdiv">

		<center>
			<span class="develop">Copyright © <?php echo date('Y'); ?> Feni Computer Institute All Right Reserved.</span><br>
			<span class="develop">Developed by</span>&nbsp;&nbsp;<a href="#" class="it">SKILL BASED IT</a></center>

		</div>
		
	</div>


	<!-----------end develop by---------->




	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="frontend/js/bootstrap-4-navbar.js"></script>
	<script type="text/javascript" src="frontend/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="frontend/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="frontend/js/uikit.min.js"></script>
	<script type="text/javascript" src="frontend/js/uikit-icons.min.js"></script>
	<script type="text/javascript" src="frontend/js/jquery.exzoom.js"></script>

	<script>
		AOS.init();      
		var preloader=document.getElementById('load');
		function myfunctions() {
			preloader.style.display='none';
		}

		$(document).ready(function() {
			$('#example').DataTable();
		} );


	</script>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="frontend/js/sliderResponsive.js"></script>


	<script>
		$(document).ready(function() {

			$("#slider1").sliderResponsive({
			});

			$("#slider2").sliderResponsive({
				fadeSpeed: 300,
				autoPlay: "off",
				showArrows: "on",
				hideDots: "on"
			});

			$("#slider3").sliderResponsive({
				hoverZoom: "off",
				hideDots: "on"
			});

		}); 
	</script>


	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript" ></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>