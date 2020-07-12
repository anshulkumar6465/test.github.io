<!doctype html>
<head>
<style>
*{
  margin:0;
  padding:0;
}

div.xx{
	margin-left:80px;
	font-size: 25px;
	color: white;

}


div.xz{
	
	float:right;
	margin-right: 50px;
	margin-top: -100px;
	font-size: 20px;
	color: white;
}



.mc
{
    width: 75%;
    height: 43px;
    padding: 12px 20px;
    margin-left: 80px;
    margin-top: 25px;
    display: inline-block;
    border: 1px solid #ccc;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    box-sizing: border-box;
    font-style: courier;
    

}



.buttoon
{
  
  float: right;
  margin-right: 97px;
  margin-top: -43px;

  background-color:green;
  border-top-right-radius:  4px;
  border-bottom-right-radius: 4px;
  color: white;
  font-family: verdana;
  font-size: 17px;
  height:43px; 
  width:160px;
  cursor: pointer;
    border: 2px solid green;
}




</style>
<script>
 function validateForm() {
   var y = document.forms["myForm"]["subscribe_mail"].value;                 /*value of entered email stored in y*/
    if(y=="")
    {
      alert("Enter your email");
      return false;
    }
    }
</script>

	<title>
		footer
	</title>
	
</head>
<body>





<div style="background-color:black; border-radius:6px; width:1350px; height: 340px">


<form method="post" action="../subscribe.php" onsubmit="return validateForm()" name="myForm">

<input class="mc" type="text" name="subscribe_mail" placeholder="Email..." ><br>

<button type="submit" class="buttoon">Subscribe</button>

</form>

<br><br>



<div style="float: right;margin-right: 280px;margin-top:-100px">
<img src="icons/call.png" style="width: 22px"><br>
 <img src="icons/whatsapp.png" style="width: 22px;"><br>
<img src="icons/gmail.png" style="width: 22px"><br>






</body>
