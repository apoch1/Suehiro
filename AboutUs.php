<!DOCTYPE html>
<!--
Spencer Petersen
Advanced JavaScript
SLCC Fall 2019 Semester
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php
		include 'includes/nav.php';
	?>
        <!--Banner and Header-->
        <div class="header">
            <!--Cherry Blossom Banner-->
            <img src="img/Banner2.png" alt="WebsiteHeader" class='banner'/>
            <!--Navigation Bar-->
            <header style="padding-left: 25px">
                Home/Menu/About Us/Weekly Events
            </header>
        </div>
        
        <!--Page Content-->
        <div class='content'>
        
            <table style='width: 100%;'>
                <tr>
                    <!--Left Half-->
                    <td style='width: 50%; padding-bottom: 15%; padding-left: 5%; padding-right: 50px;'>
                        <h2><u>About Us</u></h2>
                        <p>
                        Hi! My name is Miwa Yamada and I am the new owner of Suehiro Restaurant. 
                        I was born and raised in a small city in Japan and moved to Utah in 1995. 
                        When I first moved here, I worked for the original owner of Suehiro for about 8 years. In 2015 I decided to start my own Ramen food truck which has been doing very well. 
                        In October of 2018, I was presented with the opportunity to come back to Suehiro Restaurant, but this time as the owner. 
                        This was a very easy decision because I have always had a passion for this restaurant and the authentic food we serve. 
                        I have also added ramen to our already great menu. 
                        I hope to see you soon!
                        </p>
                    </td>
                    <!--Right Half-->
                    <td style='padding-right: 5%;'>
                        <img style='width: auto; height: 45%;' src="img/Miwako.jpg" alt="Miwa"/>
                    </td>
                </tr>
            </table>
            
        </div>
        <footer>
            <a href="https://www.facebook.com/SuehiroUtah/">
                <img src="img/facebook.png" alt="Facebook" style='width: 20px; height: 20px; border: 0; margin: 0; padding-right: 5px;'/>
            </a>
            <a href="https://www.instagram.com/suehiro_japanese_restaurant/">
                <img src="img/instagram.png" alt="Instagram" style='width: 20px; height: 20px; border: 0; margin: 0; padding-right: 5px;'/>
            </a>
            Contact Us
        </footer>
    </body>
</html>
