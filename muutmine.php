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
    <title>Grupikaaslaste lisamine/kustutamine</title>
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
                <main>
                <div class="content">
                <h2>Grupikaaslase lisamine</h2>
                <!--kirje lisamine-->
                <form action="" method="post">
                    <ul> 
                        <li>
                        <label for="Eesnimi">Eesnimi</label>
                        <input type="text" name="Eesnimi" required>
                        </li>
                        <li>
                        <label for="Perenimi">Perenimi</label>
                        <input type="text" name="Perenimi" required>
                        </li>
                        <li>
                        <label for="Sunniaasta">Sünniaasta</label>
                        <input type="text" name="Sunniaasta">
                        </li>
                        <li><?php add_button($conn); ?></li>
                        
                    </ul>
                </form>  
                    

                <h2>Grupikaaslase kustutamine</h2>
                <!--kirje kustutamine-->
                <form action="" method="post">   
                    <ul>                      
                       <li>
                       <label for="PARAM">Mille alusel otsid? (N: ID, Eesnimi)</label>
                       <input type="text" name="PARAM">
                       </li>
                       <li>
                       <label for="ID">Sisesta väärtus (N: 4, Mari, Kotkas)</label>
                       <input type="text" name="ID">
                       </li>
                        <li><?php delete_button($conn); ?></li>
                    </ul> 
                </form>
                </div>
                
                <div class="sidebar">
                    <h2>Nimekiri</h2>
                    <form action="" method="post">
                        <ul>
                            <li><?php show_button($conn); ?></li>
                        </ul>
                    </form>
                </div>
                </main>
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