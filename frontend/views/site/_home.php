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
			
<div style="height:850px; padding-top:160px">
		<img src="http://ptrnov.net/img/pp.jpg"  class="img-circle" alt="Cinque Terre" width="150" height="150">
		<div class="intro-text">
			<h2 class=""> Skills</h2>
			<hr class="star-light">
			<span class="skills">
				<div>Web Developer - Yii2 Framework - Restful API - Mobile Developer - Cordova - Ionic - AngularJs</div>
				<div>Database - DDL - DML - PL/SQL SqlServer - Mysql - Oracle</div>				
				<div>Server - Linux - WebService - ssl - zimbra mailserver </div>				
				<div>Network Engineer - Mikrotik -  Cisco Router - Catalyst - Firewall - Juniper - Portigate</div>				
			</span>
			<h2 class=""> Project</h2>
			<hr class="star-light">
			<span class="skills">
				<div>ERP - HIRS - Purchasing - Warehouse - Sales Force  - Garment Supply Chain </div>
				<div>Cashier - Accounting Jurnal </div>				
			</span>
		</div>
	
</div>
		
