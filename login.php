<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse" style="background-color:#99C;">
<div class="container">
<?php include("functions/ayar.php");
 if(isset($_SESSION["durum"])==false){ ?>
	<div class="row">
    <div class="col-5 mr-auto ml-auto mt-5 p-5" style="background-color:#FC6; border-radius:10px; opacity:0.8;">
    <h3 style="text-align:center; margin-top:30px;">Giriş Yap</h3>
    								<form  method="post">
                                    <input name="kadi" type="text" value="" placeholder="Kullanıcı Adı" class="form-control" />
                                    <input name="sifre" value="" placeholder="Şifre" type="password" class="form-control mt-2" />
                                    
                                    <input class="btn btn-light mt-2 w-100" type="submit" name="giris" value="Giriş Yap"/></form>
                                    
                                    <?php 
									
									if(@$_POST["giris"]){
	$user_name=$_POST["kadi"];
	$user_pass=$_POST["sifre"];
	if(empty($user_name) || empty($user_pass)){
		echo'<div class="alert alert-danger mt-2" role="alert" style="border-radius:10px;opacity:0.8;">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons objects_support-17"></i>
		</div>
		<strong></strong>Formda Boş Alan Bırakmayınız.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>
		';
		
		}else{
			$varmi=$baglan->prepare("select * from admins where kadi=:user_name && sifre=:user_pass");
			$varmi->execute(array(
			"user_name"=>$user_name,
			"user_pass"=>$user_pass));
			
			if($varmi->rowCount()>0){
				
				$dizi=$varmi->fetch(PDO::FETCH_ASSOC);
				echo '<div class="alert alert-success mt-2" role="alert" style="border-radius:10px;opacity:0.8;">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons objects_support-17"></i>
		</div>
		<strong></strong>Giriş Başarılı...
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>';
				            $_SESSION["kadi"]=$user_name;
							$_SESSION["durum"]=true;
							
							
							header("Refresh:0.5;url=index.php");
				
			
				
				}else{echo '<div class="alert alert-danger mt-2" role="alert" style="border-radius:10px;opacity:0.8;">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons objects_support-17"></i>
		</div>
		<strong></strong> Kullanıcı Adı veya Şifre Hatalı
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>
		';}
			
			
			}
	
	
	
	} } else{echo"zaten giris yaptınız ";} ?>
                                
    </div>                            
    </div>

</div>
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>