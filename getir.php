<?php 
include("functions/ayar.php");
$id=@$_POST["id"];
$getir=$baglan->query("select * from kisiler where id='$id'");
$getir2=$getir->fetch(PDO::FETCH_ASSOC);
echo '
<input id="idgun" value="'.$getir2["id"].'" style="display:none;"/>
 <div class="form-group">
       İsim: <input type="text" value="'.$getir2["isim"].'" placeholder="İsim" id="isim2" class="form-control bg-white">
    </div>
    <div class="form-group">
	Soyisim:
        <input type="text" value="'.$getir2["soyisim"].'" placeholder="Soyisim" id="soyisim2" class="form-control bg-white">
    </div>
     <div class="form-group">
	 T.C. :
        <input type="text" value="'.$getir2["tc"].'" placeholder="T.C. Kimlik No" id="tc2" class="form-control bg-white">
    </div>
     <div class="form-group">
	 Telefon:
        <input type="text" value="'.$getir2["tel"].'" placeholder="Telefon " id="tel2" class="form-control bg-white">
    </div>
	Adres:
    <textarea class="form-control bg-white" placeholder="Adres" id="adres2" rows="2" style="border-radius:15px;padding:15px;">'.$getir2["adres"].' </textarea>
    <p style="margin-bottom:0px; margin-top:4px;">Üyelik Başlangıç Tarihi:</p>
    <input type="date" style="width:100% ;padding:8px;border-radius:30px;border:none;" id="btarihi2" value="'.$getir2["btarihi"].'"/>
    <p style="margin-bottom:0px; margin-top:4px;">Üyelik Bitiş Tarihi:</p>
    <input type="date" style="width:100% ;padding:8px;border-radius:30px;border:none;" value="'.$getir2["bitist"].'" id="bitist2" />
	
	';if($getir2["odeme"]==1){
		echo'
   <div id="radiodiv2" class="radio mt-2 mb-0">
                <input  type="radio" name="radio1" id="radio12" checked="" value="1">
                <label for="radio12">
                    Ödendi
                </label>
            
            
            
                <input type="radio" name="radio1" id="radio22" value="2" >
                <label for="radio22">
                    Ödenmedi
                </label></div>
    </br>
    <button onClick="guncelle();" id="guncelle" class="btn btn-primary btn-round" >
	<i class="fa fa-check"></i> Güncelle
</button><button onClick="sil();" id="sil" class="btn btn-danger btn-round" >
	<i class="fa fa-close"></i> Sil
</button>';}else{
	
	echo '<div id="radiodiv2" class="radio mt-2 mb-0">
                <input  type="radio" name="radio1" id="radio12" value="1">
                <label for="radio12">
                    Ödendi
                </label>
            
            
            
                <input type="radio" name="radio1" id="radio22" value="2" checked="">
                <label for="radio22">
                    Ödenmedi
                </label></div>
    </br>
    <button onClick="guncelle();" id="guncelle" class="btn btn-primary btn-round" >
	<i class="fa fa-check"></i> Güncelle
</button><button onClick="sil();" id="sil" class="btn btn-danger btn-round" >
	<i class="fa fa-close"></i> Sil
</button>';}


?>