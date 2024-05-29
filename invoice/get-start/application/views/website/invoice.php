<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registeration form - cloud invoice system by FASTteleco</title>
<meta name="description" content="Registeration form - cloud invoice system by FASTteleco" />

<script type="text/javascript" src="http://fastteleco.com/chat/php/app.php?widget-init.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>/assets/website/js/bootstrap.min.css"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>/assets/website/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/website/css/style4.css">


</head>

<body>

	        <script type="text/javascript" src="http://fastteleco.com/chat/php/app.php?widget-init.js"></script>
		
    <div class="wrapper">

        <div class="container">
			
            <h1>Cloud invoice system</h1>
            <h3>Register new account</h3>
            
            <div class="list">
<ul>
            <li>This registeration will be manually by our team it takes maximum 24 hours</li>
    <li>You receive mail once we create your account tells you how you can login</li>
    <li>You will get 15 days trial and you can use the system with any limit</li>
    <li>5 days before the end of your subscription we will send you a reminder message that your subscription is expired soon</li>
    
            </ul>
            </div>
			<br/>
<?php if(!empty($ress) && $ress == "yes"){  ?>
											<div class="alert alert-success">
  <strong>Thank You For your Registration!</strong>  We will create your account shortly .
</div>
	<?php } else if(!empty($ress) && $ress == "no"){ ?> 
	<div class="alert alert-danger">
  <strong>Error!</strong> Please Try Later.
</div>
	<?php } ?>

			<div id="divCheckPasswordMatch" class="alert alert-danger">
 
</div>
			
          <form  method="post" action="<?php echo base_url("mail/email_sending") ?>" enctype="multipart/form-data">
	
                <input required name="name" type="text" placeholder="company Name">
                <input required name="email" type="email" placeholder="Email">
                <input required name="password" id="password" type="password" onChange="checkPasswordMatch_first();" placeholder="password">
                <input required name="repassword" id="repassword" type="password"  onChange="checkPasswordMatch();" placeholder="Rewrite Password">
  
				<input required name="phone" type="tel" placeholder="Telephone">
                <button type="submit" id="login-button">Register</button>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url() ?>/assets/website/js/index.js"></script>
    <script src="<?php echo base_url() ?>/assets/website/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/website/js/plugins.js"></script>


</body>

</html>
              
<script type="text/javascript">	
		
		//$(document).ready(function(){

//alert('gg');
$("#divCheckPasswordMatch").hide();


function checkPasswordMatch() {
	
    var password = $("#password").val();
    var confirmPassword = $("#repassword").val();
//alert(password);
//alert(confirmPassword);
    if (password != confirmPassword)
	{
	//	alert('notmatch');
		$("#divCheckPasswordMatch").show();

		  $("#divCheckPasswordMatch").html(" <strong>Error!</strong> Password not match !.");
	}
      
    else
	{
		$("#divCheckPasswordMatch").hide();

		 $("#divCheckPasswordMatch").html("");
	}
       
}

function checkPasswordMatch_first() {
	
    var password = $("#password").val();
    var confirmPassword = $("#repassword").val();
//alert(password);
//alert(confirmPassword);
    if (password != confirmPassword)
	{
	//	alert('notmatch');
		$("#divCheckPasswordMatch").show();

		  $("#divCheckPasswordMatch").html(" <strong>Error!</strong> Please reenter the same password in Rewrite password box");
	}
      
    else
	{
		$("#divCheckPasswordMatch").hide();

		 $("#divCheckPasswordMatch").html("");
	}
       
}
	//	});
</script>