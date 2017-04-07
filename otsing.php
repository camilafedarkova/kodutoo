<?php 
include 'mysql.php';
include 'menu.php';   
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Grupikaaslaste otsing</title>
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
                <h2>Kõikide juba lisatud grupikaaslaste nimekiri</h2>
                <!--kõikide kirjete näitamine -->
                <form action="" method="post">
                    <ul>
                        <li><?php show_button($conn); ?></li>
                    </ul>
                </form>
    
                <h2>Grupikaaslase otsing ühe kriteeriumi järgi</h2>
                <form action="" method="get">
                    <ul>
                        <li>
                            <label for="PARAM">Mille alusel otsid? (N: Eesnimi, Perenimi)</label>
                            <input type="text" name="PARAM">
                        </li>
                        <li>
                            <label for="ID">Sisesta väärtus (N: Mari, Kotkas)</label>
                            <input type="text" name="ID">
                        </li>
                        <li><?php search_by_button($conn); ?></li>
                    </ul>
                </form>
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