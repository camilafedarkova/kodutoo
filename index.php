<?php  
    require ('function.php');
    require ('menu.php');        
?>

<!DOCTYPE html>
<html lang="et">    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Grupikaaslased</title>
</head>    
<body> 
     <div class="wrap">
        
        <header>
            <div class="wrap800">
                <div class="header-img">
                   <img src="images/tpt_logo.jpg" alt="Tallinna Polütehnikum" width="150"> 
                </div>            
                <?php menu($menu_begin,$menu_arr,$menu_end); ?> 
            </div>
        </header> 
        <main>
            <div class="wrap800">
                <h2>Grupikaaslased</h2>
                <p>Siin lehel saad otsida grupi MS-16 liikmeid. Samuti on võimalik lisada uusi ja kustutada olemasolevaid grupikaaslaseid. </p>
            </div>
        </main>
        
    </div>    
    
        <footer>
            <div class="wrap800">
                <p>Autor Camila Fedarkova MS-16</p>
            </div>
        </footer>  
</body>    
</html>