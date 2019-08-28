<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> <?php echo $titulo ?> </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets-login/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets-login/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets-login/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets-login/css/style.css">
       

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
      
    </head>

    <body>


    	<?php
        include "menu_view.php";
        require "menu_view.php";
    ?>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Eai Chegou? | Login, Sing-Up</h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Entrar</h3>
	                            		<p>Digite seu nome de Usuario e Senha para fazer Login: </p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    



									<!-- Formulario para Login -->
									
 									<?php echo form_open('login/entrar', 'id="form-login"'); ?>

					                    <form role="form" action="" method="post" class="login-form">
					                    	<div class="form-group">
					                    		<label class="sr-only" for="username">Username</label>
					                        	
					                        	<input type="text" name="usuario" placeholder="Usuario..." class="form-username form-control" id="form-username"  >

					                        </div>
					                        <div class="form-group">
					                        	<label class="sr-only" for="password">Password</label>
					                        	
					                        	<input type="password" name="senha" placeholder="Senha..." class="form-password form-control" id="form-password"  >

					                        </div>
					                        <button type="submit" class="btn" > Entrar</button>
												<!-- onclick="location.href='<?php echo base_url();?>login/entrar' -->

					                    </form>

				                    <?php echo form_close(); ?>


				                    <!-- Formulario para Login -->





			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...Ou faça login com:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                     
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        		
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/assets-login/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets-login/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets-login/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>