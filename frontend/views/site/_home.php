<?php
use yii\helpers\Url;
?>
<div id="home-view"></div>
<?php
	$url_dev = Url::base(true);
	//$path='/site/ambil-data';
	$path='/site/home-front';
	$this->registerJs("			
		$(document).ready(function()
		{
			
			 //$('#signup').on('load', function() {
				$.ajax({
					
					url: '".$url_dev.$path."',
				   type: 'GET',
				  // data: {searchname: $('#searchname').val() , searchby:$('#searchby').val()},
				  // data: {searchname: $('#searchname').val() , searchby:$('#searchby').val()},
				   success: function (data) {
					  //concole.log(data);
						//alert(data);	
						//return data;
						var element = document.getElementById('home-view').innerHTML=data ;
						//document.getElementById('home');
						//element.appendChild(data);
				   }

			  });
			//});
		}) 	
	",$this::POS_READY);

?>
			<div class="" id="home" tabindex="-1">
				<div style="height:550px; padding-top:110px">
						<img src="http://ptrnov.net/img/pp.jpg"  class="img-circle" alt="Cinque Terre" width="150" height="150">
						<div class="intro-text">
							<h2 class=""> Tanjung Sakti</h2>
							<hr class="star-light">
							<span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
						</div>
					
				</div>
			</div>
