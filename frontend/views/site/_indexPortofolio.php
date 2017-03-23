<?php 
use yii\helpers\Url;
$baseUrl = Url::base(true);
$path='/site/signup';
$imageUrl=Url::base(true).'/template/ptr_front_smoth/img/portfolio/';


		$a=$this->registerJs("
		
		 /* $(document).ready(function()
			{
				
				 //$('#myHref').on('load', function() {
					$.ajax({
						
						url: '".$baseUrl.$path."',
					   type: 'post',
					  // data: {searchname: $('#searchname').val() , searchby:$('#searchby').val()},
					  // data: {searchname: $('#searchname').val() , searchby:$('#searchby').val()},
					   success: function (data) {
						  //concole.log(data);
							//alert(data);	
							//return data;
							var element = document.getElementById('test').innerHTML=data ;
							//element.appendChild(data);
					   }

				  });
				//});
			}) */
		
		
		",$this::POS_READY);

		echo $a;
?>

	<div class="row">
		<div class="col-lg-12 text-center">
			<h2>Portfolio</h2>
			<hr class="star-primary">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 portfolio-item">
			<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
				<div class="caption">
					<div class="caption-content">
						<i class="fa fa-search-plus fa-3x"></i>
					</div>
				</div>
				<img src="<?=$imageUrl.'cabin.png'?>" class="img-responsive" alt="Cabin">
			</a>
		</div>
		<div class="col-sm-4 portfolio-item">
			<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
				<div class="caption">
					<div class="caption-content">
						<i class="fa fa-search-plus fa-3x"></i>
					</div>
				</div>
				<img src="<?=$imageUrl.'cake.png'?>"  class="img-responsive" alt="Slice of cake">
			</a>
		</div>
		<div class="col-sm-4 portfolio-item">
			<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
				<div class="caption">
					<div class="caption-content">
						<i class="fa fa-search-plus fa-3x"></i>
					</div>
				</div>
				<img src="<?=$imageUrl.'circus.png'?>" class="img-responsive" alt="Circus tent">
			</a>
		</div>
		<div class="col-sm-4 portfolio-item">
			<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
				<div class="caption">
					<div class="caption-content">
						<i class="fa fa-search-plus fa-3x"></i>
					</div>
				</div>
				<img src="<?=$imageUrl.'game.png'?>" class="img-responsive" alt="Game controller">
			</a>
		</div>
		<div class="col-sm-4 portfolio-item">
			<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
				<div class="caption">
					<div class="caption-content">
						<i class="fa fa-search-plus fa-3x"></i>
					</div>
				</div>
				<img src="<?=$imageUrl.'safe.png'?>" class="img-responsive" alt="Safe">
			</a>
		</div>
		<div class="col-sm-4 portfolio-item">
			<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
				<div class="caption">
					<div class="caption-content">
						<i class="fa fa-search-plus fa-3x"></i>
					</div>
				</div>
				<img src="<?=$imageUrl.'submarine.png'?>submarine.png" class="img-responsive" alt="Submarine">
			</a>
		</div>
