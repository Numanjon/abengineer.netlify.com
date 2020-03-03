<html>
<head>
<title>Полив теплицы</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name=viewport content="width=device-width, initial-scale=1">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">

 
    <script>  


        function show()  
        {  
            
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        }); 
        

          function AjaxFormRequest(result_id,button,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+button).serialize(),

         });
}


</script>
  
    
</head>
    <body style="background-image:url(images/fon.jpg)">




<table align="center" border="0" cellpadding="4" cellspacing="0" style="width:95%">
	<tbody>
		<tr>
			<td style="text-align:center"><span style="color:#008000"><span style="font-size:24px"><strong>Полив теплицы</strong></span></span></td>
		</tr>
		<tr>
			<td style="text-align: center;"><img alt="" src="img/pomidor.jpg" style="height:113px; width:150px" /></td>
		</tr>
	</tbody>
</table>


<table align="center" border="0" cellpadding="4" cellspacing="0" style="width:95%">
	<tbody>
		<tr>
			<td style="text-align: center; vertical-align: middle;">

<form  id="led" action="" method="post"  >

       <div class="descr"><input type="radio" visibility= "hidden"; checked="checked" name="status" value="ON(")></div>
                 
        <img alt="" src="img/but_on.jpg" style="height:80px; width:80px" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/pomidor.php')"/>
             
 </form>

</td>
			<td style="text-align: center; vertical-align: middle;">


<form  id="ledd" action="" method="post"  >     
           <div class="descr"><input type="radio" checked="checked" name="status" value="Off)")></div>      
        <img alt="" src="img/but_off.jpg" style="height:75px; width:75px" onclick="AjaxFormRequest('messegeResult', 'ledd', 'transfer/pomidor.php')"/>            
 </form>

</td>
			<td style="text-align: center; vertical-align: middle;">


<!--  скрипт --> 
<script>
setInterval(function(){
$("#Nasos").load("index.php #Nasos");
}, 1000); 
</script>

<div id="Nasos"> 

<?php

$myFile = "txt/pomidor.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);

if  ( $theData == "ON(")
{
 echo  '<img src="img/nas_on.jpg" style="height:95px; width:50px">'; 
}

if  ( $theData == "Off)" )
{
 echo '<img src="img/nas_off.jpg" style="height:95px; width:50px">'; 
}
?>

</div>

</td>
		</tr>
	</tbody>
</table>




<table align="center" border="0" cellpadding="4" cellspacing="0" style="width:95%">
	<tbody>
		<tr>
			<td style="text-align: center; vertical-align: middle; width: 50%;"><span style="color:#008080"><span style="font-size:16px">Вода</span></span></td>
			<td style="text-align: center; vertical-align: middle;"><span style="color:#008080"><span style="font-size:16px">Мотор</span></span></td>
		</tr>
		<tr>
			<td style="text-align: center; vertical-align: middle;">
<div class="r2" style="display:inline-block;"><img alt="" src="img/temp.jpg" style="height:30px; width:18px" /> <div class="r3" id="content-2"></div>  <div class="r3">


<!--  скрипт --> 
<script>
setInterval(function(){
$("#temp_v").load("index.php #temp_v");
}, 1000); 
</script>

<div id="temp_v"> 

<?php

$myFile = "in/1/log.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>

 &ordm;C</div>
</div>			

</td>
			<td style="text-align: center; vertical-align: middle;">
<div class="r2" style="display:inline-block;"><img alt="" src="img/temp.jpg" style="height:30px; width:18px" /> <div class="r3" id="content-2"></div>  <div class="r3">-- &ordm;C</div>
		

</td>
		</tr>
	</tbody>
</table>




<table align="center" border="0" cellpadding="4" cellspacing="0" style="width:90%">
	<tbody>
		<tr>
			<td><span style="color:#008080"><span style="font-size:16px">Время полива </span>
<!--  скрипт --> 
<script>
setInterval(function(){
$("#time").load("index.php #time");
}, 1000); 
</script>
<div class="r3">
<div id="time"> 

<?php

$myFile = "in/time/log.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>

</div></div>
</td>
		</tr>
	</tbody>
</table>







     
        
   </body>
</html> 








	