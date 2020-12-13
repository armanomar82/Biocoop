<?php
include("prosesser.php");
include("link/header.php");
        while($i < $arrayLength){
            $arrayMois = explode(",", $arrayContentJson[$i]['mois']);
            if (in_array("juin", $arrayMois)) {
                echo ("
                    <div class='vegetable'>
                        <div class='vegetable__img' style='background-image: url(" . $arrayContentJson[$i]['image'] . ")'>
                        </div>
                        <p class='vegetable__name'>" . $arrayContentJson[$i]['nom'] . "</p>
                    </div>
                    ");
            }
            $i++;    
        }
            echo("
                <div class='month__box'>
                    <a href='05.php' class='month__icon month__icon--1' ><img src='img/previous.svg'></a>
                        <h1>juin</h1>
                    <a href='07.php' class='month__icon month__icon--2'><img src='img/next.svg '></a>
                </div>
                ");
include("link/footer.php");
?>
