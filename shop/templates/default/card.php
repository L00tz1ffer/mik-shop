<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

            <div class="card">
                <div class="card-title">
                    <?= $row['title']?>
                </div>
                <img src="https://placekitten.com/287/180" class="card-img-top" alt="Produkt"/>
                <div class="card-body">
                    <?= $row['description']?>
                    <hr>
                    <?= $row['price'] ?>
                </div>

                <div class="card-footer">
                    <a href="" class="btn btn-primary">Details</a>
                    <a href="index.php/cart/add/<?= $row['id'] ?>" class="btn btn-success">In den Warenkorb</a>
                </div>
            </div>