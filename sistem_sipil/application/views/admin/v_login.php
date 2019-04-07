<!DOCTYPE html>
<html lang="en">

    <head>
        <div>
            <p><?php echo $this->session->flashdata('msg');?></p>
         </div>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'http://fonts.googleapis.com/css?family=Roboto:400,100,300,500'?>">
        <link rel="stylesheet" href="<?php echo base_url().'asset/bootstrap/css/bootstrap.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'asset/font-awesome/css/font-awesome.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'asset/css/form-elements.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'asset/css/style.css'?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url().'asset/ico/favicon.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'asset/ico/apple-touch-icon-144-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'asset/ico/apple-touch-icon-114-precomposed.png' ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'asset/ico/apple-touch-icon-72-precomposed.png' ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'asset/ico/apple-touch-icon-57-precomposed.png' ?>">

    </head>

    <body>

		<!-- Top menu -->

				<!-- Collect the nav links, forms, and other content for toggling -->

			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Teknik Sipil</strong> </h1>
                            <div class="description">
                            	<p>

                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-6 book">
                    	<!-- 	<img src="#" alt="">-->
                    	</div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                                <form action="<?php echo site_url().'admin/login/auth'?>" method="post">
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Usernama</label>
			                        	<input type="text" name="username" placeholder="Username" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Password</label>
			                        	<input type="text" name="password" placeholder="Password" class="form-last-name form-control" id="form-last-name">
			                        </div>
			                        <button type="submit" class="btn">Login</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url().'asset/js/jquery-1.11.1.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/bootstrap/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/jquery.backstretch.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/retina-1.1.0.min.js'?>"></script>
        <script src="<?php echo base_url().'asset/js/scripts.js'?>"></script>
        
        <!--[if lt IE 10]>
            <script src="asset/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>