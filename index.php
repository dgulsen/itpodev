<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title></title>
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

<body class="index-page sidebar-collapse bg-info">

<?php include("functions/ayar.php");
 if(isset($_SESSION["durum"])==false){echo"oturum ac ";header("Refresh:0; url=login.php");}else{  ?>
   
   <div class="container-fluid">
   
   <div class="row">
   <div class=" w-100 bg-secondary align-middle " style="position:absolute;height:70px;"><form action="functions/cikis.php"><button class="btn btn-danger float-right mr-4 mt-3" >Çıkış</button></form><h3 class="float-right mr-3 mt-3">Hoşgeldin <?php echo $_SESSION["kadi"]; ?></h3></div>
   <div class="col-2  " style="background-color:#C63; height:100vh; ">
   <h3 class="mt-2 text-center">Menü</h3>
   <div class="nav flex-column nav-pills bg-white p-3 border-secondary" style="border-radius:10px ;opacity:0.9;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Tüm Kayıtlar</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Yeni Kişi Ekle</a>
  <a class="nav-link" id="v-pills-ara-tab" data-toggle="pill" href="#v-pills-ara" role="tab" aria-controls="v-pills-ara" aria-selected="false">Kişi Ara, Düzenle ve Sil</a>
</div>

   </div>
   
   <div class="col-9">
   <div class=" w-100  " style="margin-top:80px;">
                   <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">İsim</th>
      <th scope="col">Soyisim</th>
      <th scope="col">T.C. Kimlik No</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adres</th>
      <th scope="col">Başlangıç T.</th>
      <th scope="col">Bitiş T.</th>
      <th scope="col">Ödeme</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
  $i=1;
  $veri=$baglan->query("select * from kisiler order by id ");

$islem=$veri->fetchAll(PDO::FETCH_ASSOC);

foreach($islem as $row){echo'
<tr>
      <th scope="row">'.$i.'</th>
      <td>'.$row["isim"].'</td>
      <td>'.$row["soyisim"].'</td>
      <td>'.$row["tc"].'</td>
	   <td>'.$row["tel"].'</td>
	    <td>'.$row["adres"].'</td>
		 <td>'.$row["btarihi"].'</td>
		  <td>'.$row["bitist"].'</td>
		  ';if($row["odeme"]==1){
			  echo'<td>ödendi</td>';}
			  else{echo'<td>ödenmedi</td> </tr>';}
			  
		  
   
$i++;
 }
   ?>
   
  </tbody>
</table>
                  </div>
                  <!--İLK BİTTİ-->
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                   
                   <div  class="col-4">
                   
                   <div class="form-group">
        <input type="text" value="" placeholder="İsim" id="isim" class="form-control bg-white">
    </div>
    <div class="form-group">
        <input type="text" value="" placeholder="Soyisim" id="soyisim" class="form-control bg-white">
    </div>
     <div class="form-group">
        <input type="text" value="" placeholder="T.C. Kimlik No" id="tc" class="form-control bg-white">
    </div>
     <div class="form-group">
        <input type="text" value="" placeholder="Telefon " id="tel" class="form-control bg-white">
    </div>
    <textarea class="form-control bg-white" placeholder="Adres" id="adres" rows="5" style="border-radius:15px;padding:15px;"></textarea>
    <p style="margin-bottom:0px; margin-top:4px;">Üyelik Başlangıç Tarihi:</p>
    <input type="date" style="width:100% ;padding:8px;border-radius:30px;border:none;" id="btarihi" />
    <p style="margin-bottom:0px; margin-top:4px;">Üyelik Bitiş Tarihi:</p>
    <input type="date" style="width:100% ;padding:8px;border-radius:30px;border:none;" id="bitist" />
   <div id="radiodiv" class="radio mt-2">
                <input  type="radio" name="radio1" id="radio1" value="1">
                <label for="radio1">
                    Ödendi
                </label>
            
            
            
                <input type="radio" name="radio1" id="radio2" value="2" checked="">
                <label for="radio2">
                    Ödenmedi
                </label></div>
    </br>
    <button id="kaydet" class="btn btn-primary btn-round" >
	<i class="fa fa-check"></i> Kaydet
</button>
    
    <div id="sonuc2"></div>

    
  
                  </div>
                  </div>
                  <!-- iki bitti-->
                  <div class="tab-pane fade" id="v-pills-ara" role="tabpanel" aria-labelledby="v-pills-ara-tab">
                  <div class="row">
                  		<div class="col-5">
                          <div class="input-group mb-0">
                <span class="input-group-addon ">
                    <i class="fa fa-search"></i>
                </span>
                <input id="isimm" type="text" class="form-control bg-white" placeholder="Arama">
            </div>
            		<div class="bg-white p-2  ml-auto mr-auto " style="width:400px; border-radius:0 0 5px 5px; " id="sonuc">
                   
            		</div>
                </div>        
                <div  class="col-6"><div id="sonuc3"></div>
                <div id="sonuc4"></div>
                </div>
                     </div>
                     </div>
                  <!-- üç bitti-->
                </div>
  
    </div>
	</div>
</div>
</div>
<?php } ?>
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
   function getir(){
	   var a=$("#sonuc input[type='radio']:checked").val();
	   $.ajax({
				url:"getir.php",
				data:{"id":a},
				type:"POST",
				success: function(sonuc){
					
					
					$("#sonuc3").html(sonuc);}
				
				
				});
		   
		   
		   
		  
	   }
		
		$("#kaydet").click(function () {
			var isim=$("#isim").val();
			var soyad=$("#soyisim").val();
			var tcno=$("#tc").val();
			var tel=$("#tel").val();
			var adres=$("#adres").val();
			
			var bitist=$("#bitist").val();
			var btarihi=$("#btarihi").val();
			var radio1=$("#radiodiv input[type='radio']:checked").val();
			
			$.ajax({
				url:"ekle.php",
				data:{"isim":isim,"soyad":soyad,"tcno":tcno,"tel":tel,"adres":adres,"btarihi":btarihi,"bitist":bitist,"radio1":radio1},
				type:"POST",
				success: function(sonuc){
					
					
					$("#sonuc2").html(sonuc);}
				
				
				});
			
		
			
			
			})
		
		
		
		function ara(){
			var isim=$("#isimm").val();
			
			$.ajax({
				url:"ara.php",
				data:{"isim":isim},
				type:"POST",
				success: function(sonuc){
					
					
					$("#sonuc").html(sonuc);}
				
				
				});
			
		
			
			
			}
			function gizle(){
				
				
				if($("#isimm").val()==""){
					$("#sonuc").hide();
					}else{$("#sonuc").show();}
				
				}
				
				function guncelle(){
					var idgun=$("#idgun").val();
					var isim=$("#isim2").val();
			var soyad=$("#soyisim2").val();
			var tcno=$("#tc2").val();
			var tel=$("#tel2").val();
			var adres=$("#adres2").val();
			var btarihi=$("#btarihi2").val();
			var bitist=$("#bitist2").val();
			
			var radio1=$("#radiodiv2 input[type='radio']:checked").val();
			
			$.ajax({
				url:"guncellle.php",
				data:{"idgun":idgun,"isim":isim,"soyad":soyad,"tcno":tcno,"tel":tel,"adres":adres,"btarihi":btarihi,"bitist":bitist,"radio1":radio1},
				type:"POST",
				success: function(sonuc){
						$("#sonuc4").html(sonuc);
					
					
				}
				
				
				});
				
			
		
				}
				
				function sil(){
					 var answer = confirm("Kayıt silinecek, emin misiniz?");
        if (answer){var idgun=$("#idgun").val();
				$.ajax({
				url:"sil.php",
				data:{"idgun":idgun},
				type:"POST",
				success: function(sonuc){
						$("#sonuc4").html(sonuc);
					
					
				}
				
				
				});
              
        }
        else{
               
        }
				
			
					
					}
			setInterval("ara()",500);
			setInterval("gizle()",250);
			
    
</script>

</html>