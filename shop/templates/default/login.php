<DOCTYPE html>

<html lang="de">
<head>
	<title>
		Smileys Dönerbox
	</title>
        <base href="<?=$baseUrl?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=BOOTSTRAPDIR?>css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/css/styles.css">

		
</head>
<body>
<?php include __DIR__.'/navbar.php'?>
<div class="container">
  <div class="jumbotron">
			<h1>Wilkommen bei Smileys Dönerbox</h1>
		</div>

	</div>
	<section class="container" id="loginForm">
            <form action="index.php/login" method="POST">
                <div clas="card">
                    <div class="card-header">
                        Login
                    </div>
                    <DIV class="card-body">
                        
                        <?php if ($hasErrors):?>
                            <div class="alert alert-danger" role="alert">
                                <?php foreach ($errors as $errorMessage):?>
                                    <p><?= $errorMessage?></p>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                                             
                        
                        <DIV class="form-group">
                            <label for="username">Username</label>
                            <INPUT type="text" value="<?=$username?>" name="username" id="username" class="form-control">
                        </DIV>
                        <DIV class="form-group">
                            <label for="password">Username</label>
                            <INPUT type="password" value="<?=$password?>" name="password" id="password" class="form-control">
                        </DIV>
                    </div>
                    <div class="card-footer">
                        <BUTTON class="btn btn-success" type="submit">Login</BUTTON>
                    </div>
                    
                </DIV>
            </form>

	</section>
	
	
	
	<script src="<?=BOOTSTRAPDIR?>js/bootstrap.bundle.js"></script>
</body>

</html>
