<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart UI</title>
	<link rel="stylesheet" href="carttstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
	<style>
		*{
			overflow: hidden;
		}
		.Heading{
	font-size: 30px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #2F3841;
	top: 100%;
	

}
.Heading1{
	font-size: 25px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #2F3841;
}
.Header{
	float: right;
	margin-right: -220px;
}

.button{
	margin-top: 100px;
	width: 100%;
	height: 40px;
	border: none;
	background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
	border-radius: 20px;
	cursor: pointer;
	font-size: 16px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #202020;
}
.checkout{
	float: right;
	margin-right: 35%;
	width: 28%;
}
	</style>
</head>
<body>



   <div class="CartContainer">
   <div class="Header"></div>
   	   <div class="Header">
   	   	<h3 class="Heading">Order Placed Successfully!! </h3>
	   </div>
	   <div class="Header">
		<h3 class="Heading1">Thanks For Shopping with us</h3>
   	   </div>


   	 <div class="checkout">
        
   	
   	 <button class="button">Continue Shopping</button></div>
   </div>

</body>
</html>