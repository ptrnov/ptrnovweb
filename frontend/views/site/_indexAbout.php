<?php 
use yii\helpers\Url;

		$url_dev = Url::base(true);
		//$path='/site/ambil-data';
		$path='/site/signup';
		$a=$this->registerJs("
		
		 /* $(document).ready(function()
			{
				
				 //$('#myHref').on('load', function() {
					$.ajax({
						
						url: '".$url_dev.$path."',
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

	 <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About ME</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
