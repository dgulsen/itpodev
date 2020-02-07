<?php
include("functions/ayar.php");

$isim=@$_POST["isim"];
$soyad=@$_POST["soyad"];
$tcno=@$_POST["tcno"];
$tel=@$_POST["tel"];
$adres=@$_POST["adres"];
$btarihi=@$_POST["btarihi"];
$bitist=@$_POST["bitist"];
$onay=@$_POST["radio1"];


if(empty($isim) || empty($soyad) || empty($tcno) || empty($tel) || empty($adres) || empty($btarihi) || empty($bitist) || empty($onay) ){
	echo'
	<div class="alert alert-danger" role="alert">
	<div class="container">
		
		<strong></strong>Formda Boş Alan Bırakmayınız.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>
	 ';
	}
	else{
		
		
		$ekle=$baglan->query("INSERT INTO `kisiler` ( `isim`, `soyisim`, `adres`, `tel`, `tc`, `btarihi`, `bitist`, `odeme`) VALUES ( '$isim', '$soyad', '$adres', '$tel', '$tcno', '$btarihi', '$bitist', '$onay')");
		echo'<div class="alert alert-success" role="alert">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons ui-2_like"></i>
		</div>
		<strong>Kayıt Başarılı..</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>';								 
										  
		
		
	}

?>
