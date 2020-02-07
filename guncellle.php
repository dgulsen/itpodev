
<?php 
include("functions/ayar.php");
$idgun=@$_POST["idgun"];
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
		
		
		$ekle=$baglan->query("UPDATE `kisiler` SET `isim` = '$isim',`soyisim` = '$soyad',`tc` = '$tcno',`tel` = '$tel',`adres` = '$adres',`btarihi` = '$btarihi', `bitist` = '$bitist',`odeme` = '$onay' WHERE `id` = '$idgun';");
		echo'<div class="alert alert-success" role="alert">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons ui-2_like"></i>
		</div>
		<strong>Güncelleme Başarılı..</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>';								 
										  
		
		
	}
  ?>