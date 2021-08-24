<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!-- DEBUGGING --->
<?php if(DEBUGGING === "1"): ?>            
<br><br><br><br><br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">DEBUG ZEILE</a>
        <ul>


                <li class="nav-item" style="padding-right: 20px;">
                    userID: <?= var_dump($userID) ?>
                </li>
                <li class="nav-item" style="padding-right: 20px;">
                    route: <?= var_dump($route) ?>
                </li>
                <li class="nav-item" style="padding-right: 20px;">
                    BASEURL: <?= var_dump(BASEURL) ?>
                </li>

            
        </ul>
        
    </div>

</nav>
<?php endif; ?>
<!-- DEBUGGING END --->  