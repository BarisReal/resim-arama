<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<link rel=“stylesheet” href=“https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/
dist/css/bootstrap.min.css”>
<script src=“https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/
jquery.min.js”></script>
<script src=“https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/
popper.min.js”></script>
<script src=“https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/
bootstrap.min.js”></script>
<body bgcolor="black">
<div class="arkaplan">
 <form action=“resimGetir.php” name=“resimGetir” method=“get”>
 <h1 align=‘center’>Resmi Getirelim</h1>
 <div class=“formgrup”>
 <input type=“text” class=“form-control” id=“resimText”
name=“resimAdi” placeholder=“Resim adı giriniz”>
 <button class=“btn btn-outline-primary” id=“buton”>
Getir</button>
 </div>
<style>
 .arkaplan{
 margin:auto;
 margin-top:20px;
 height:650px;
 width:650px;
 color:honeydew;
 border:2px solid black;
 padding:25px;
 margin-left:10px;
 background:goldenrod
 }
 .formgrup{
 height:75px;
 width: auto; 
 }
 #resimText{
 width:250px;
 float:left;
 margin-right:10px;
 }
 #buton{
 width:180px;
 }
 .resim{
 height:325px;
 width: auto;
 padding-left:150px;
 padding-top:90px;
 border:2px dotted honeydew;
 background-image:url(‘img/resim1.jpg’);
 background-size:cover;
 }
</style>

<?php
 if(!empty($_GET['resimAdi']))
 {
 $text=$_GET["resimAdi-"];
 $text="img/".$text.".jpg";
 echo "<div class='resim' style='background-image:
url($text)''></div>";
 }
 else
 echo "<div class='resim' style='background-image:
url(img/resim1.jpg)''></div>";
 
 ?>
 </form> 
 </div>
</body>
</html>

</body>
</html>