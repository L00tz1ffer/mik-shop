<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!Doctype <!doctgeype html>
<html>
    <head>
        <title>
            <?=PAGE_TITLE?>
        </title>
        <base href="<?= BASEURL ?>">
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=BOOTSTRAP_DIR?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=CUSTOM_STYLESHEETS?>styles.css">
    </head>
    <body>
        <?php include TEMPLATE_DIR.'/modules/generic/navbar.php'; ?>
        <header class="<?=CLASS_JUMBOTRON?>">
            <div class="container">
                Wilkommen in unserem Online Bestellservice  
            </div>
        </header>
        
        <section class="container" id="loginForm">
            <div class="row">
                <div class="col-12 loginHeader">
                    <center><h2>Bitte melde dich zuerst an</h2></center>
                </div>
            </div>
            <form action="index.php/login" method="POST">
                <div class="row">
                    <div class="col-4"></div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <center>
                                        Anmeldung
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" value="<?=$username?>" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" value="<?=$password?>" name="password" id="password" class="form-control">
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success" type="submit">Login</button>
                                </div>

                            </div>
                        </div>
                    <div class="col-4"></div>
                </div>
            </form>
            
        </section>
        
        <div>
            <?php include TEMPLATE_DIR.'/modules/generic/debugging.php'; ?>
        </div>
    
        <script src="<?=BOOTSTRAP_DIR?>/js/bootstrap.bundle.js"    
    </body>
</html>