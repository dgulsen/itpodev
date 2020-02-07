<?php 
include("functions/ayar.php");
$ara =@$_POST["isim"];

$listele=$baglan->prepare("select * from kisiler where isim LIKE :ara ||  soyisim LIKE :ara");
if(empty($ara)){
$i=0;

}else{
$listele->execute(array(':ara' =>'%'.$ara.'%'));
if($listele->rowCount()){
foreach($listele as $row){
	
	echo'<div style="width:100%" > <div style="display:inline-block;width:200px; margin-top:5px; " ><a href="#" class="ml-3" style="font-size:15px; ">'.$row["isim"].' '.$row["soyisim"].'</a></div>
<div style="display:inline-block;float:right;width:90px; margin-top:5px;"><div>
 <label for="'.$row["id"].'" style="background-color:blue;border-radius:4px;opacity:0.8;">
                 <strong style="color:white;padding:5px;">Görüntüle</strong>
                </label></div>
<input onClick="getir();" style="display:none;" id="'.$row["id"].'" type="radio" name="cvp" value="'.$row["id"].'"/>
</div></div>
<hr style="margin-bottom:3px;margin-top:3px;>
'

;
echo "<br>";

	
	
	}
		
}else{echo "Sonuç Bulunamadı..";};
		
}
	

?>