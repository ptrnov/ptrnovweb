<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12 ">
	
	<!-- Header -->
		
		<header>   
			<div class="" id="home" tabindex="-1">
				<?=$this->render('_home')?>
			</div>
		</header>


		<!-- Portfolio Grid Section -->
		 <section id="portfolio">
			
				<?=$this->render('_indexPortofolio')?>
	
		</section>

		<!-- About Section -->
		<section class="success" id="about">
			<?=$this->render('_indexAbout')?>
		</section>

		<!-- Contact Section -->
		<section id="contact">
			<?=$this->render('_indexContact')?>
		</section>		

		<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
			<a class="btn btn-primary" href="#page-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>

		
	</div>
</div>

