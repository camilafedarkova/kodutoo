<?php
require 'function.php';

//defineerime ühenduse muutujad
$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server, $user, $pass);

//loome ühenduse
function connect($conn){
//kontrollime ühenduse olemasolu
    if (!$conn) {
        die("Ühendust ei ole". msqli_connect_error());
    } echo "Jess! Kontakteerusin! <br>";
        return $conn;
}

//pärime kõiki andmeid baasist korraga
function my_query($conn){
$sql = "SELECT ID, Eesnimi, Perenimi, Sunniaasta, Pilt, Aeg FROM grupp16.kaaslased";
$result = $conn->query($sql);  
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br> ID: ".$row["ID"]." NIMI: ".$row["Eesnimi"]." PERENIMI: ".$row["Perenimi"]." SÜNNIAASTA: ".$row["Sunniaasta"]." PILT: ".$row["Pilt"]." SISESTAMISE AEG: ".$row["Aeg"]."<br>";   
        
    }
}
else { echo "Sul on tühi baas,  tee midagi!";}
}

//otsime parameetri järgi
function search_by($conn) {
    $sql = "SELECT * FROM grupp16.kaaslased WHERE ".$_GET['PARAM']."='".$_GET['ID']."'";
  
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br> ID: ".$row["ID"]." NIMI: ".$row["Eesnimi"]." PERENIMI: ".$row["Perenimi"]." SÜNNIAASTA: ".$row["Sunniaasta"]." PILT: ".$row["Pilt"]." SISESTAMISE AEG: ".$row["Aeg"]."<br>";  
    }
}
else { echo "Sellist kirjet ei ole!";}
}

//lisame andmebaasi andmeid
function my_insert($conn){
    if ($_POST['Eesnimi']==null OR $_POST['Perenimi']==null) {
        echo "Eesnimi ja perenimi on kohustuslikud";
    } else {
    $sql = "INSERT INTO grupp16.kaaslased (Eesnimi,Perenimi,Sunniaasta,Pilt) VALUES ('"
        .$_POST['Eesnimi']."','"
        .$_POST['Perenimi']."','"
        .$_POST['Sunniaasta']."','"
        .$_POST['Pilt']."')";
	
$result = $conn->query($sql);
     
    }
}

//kustutame andmebaasis andmeid
function my_delete($conn){
    $sql = "DELETE FROM grupp16.kaaslased WHERE ".$_POST['PARAM']."='".$_POST['ID']."'";
    $result = $conn->query($sql);
}

// ***NUPUD***

//kõigi kirjete järgi otsimise nupp
function show_button($conn){
    echo "<input type='submit' name='show' value='NÄITA NIMEKIRJA'>";
    if (isset($_POST['show'])){
        my_query($conn);
    } 
}
//parameetri järgi otsimise nupp
function search_by_button($conn){
    echo "<input type='submit' name='search' value='OTSI'>";
    if (isset($_GET['search'])){        
        if ($_GET['ID']==null OR $_GET['PARAM']==null){
            echo "Lahtrid ei tohi olla tühjad!";}
        else {search_by($conn);}
        
    } 
}

//kirje lisamise nupp
function add_button($conn){
    echo "<input type='submit' name='add' value='LISA KIRJE'>";
    if (isset($_POST['add'])){
        my_insert($conn);
    } 
}

//kirje kustutamise nupp
function delete_button($conn){
    echo "<input type='submit' name='delete' value='KUSTUTA KIRJE'>";
    if (isset($_POST['delete'])){
        my_delete($conn);
    } 
}


//function my_close($conn){  
	//$conn->close();
//}

?>
