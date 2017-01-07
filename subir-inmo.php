<?php
include("datosiniciales.php");
//$nombre_fichero = '/path/to/foo.txt';localhost:8081/actu-inmo.php?nomarchivo=30260-pru.csv&zipcode=30260
try {
//$nombre_fichero = $_GET["nomarchivo"];//'30260.csv';
//$zip_code = $_GET["zipcode"];//'30260.csv';
if (isset($_GET["nomarchivo"])) $nombre_fichero = $_GET["nomarchivo"]; else $nombre_fichero = '';//'30260.csv';
if (isset($_GET["zipcode"])) $zip_code = $_GET["zipcode"]; else $zip_code = '00000';
} catch (Exception $e) {
echo 'Falta alguna de las variables de entrada: ',  $e->getMessage(), "\n";
}
try {
$str = "Hello Friend";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
print_r($arr2);
print_r($arr2[0]);

// Ejemplo 1
$pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
$porciones = explode(" ", $pizza);
echo $porciones[0]; // porción1
echo $porciones[1]; // porción2

$phrase  = 'You " should eat  fruits, " vegetables, and fiber every day.';
$healthy = array('"', "vegetables", "fiber");
$yummy   = array("", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
print_r($newphrase);

$cmdsqlinsert = " insert into datoscasas ";
if (file_exists($nombre_fichero)) {
    echo "El fichero $nombre_fichero existe";
	$fp = fopen($nombre_fichero, "r"); 
	
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
	// prepare sql and bind parameters
	//$sqlquery = " UPDATE ".$dbname.".datoscasas SET dato1= :dato1,dato3=:dato3,dato4=:dato4,dato5=:dato5,dato6=:dato6,dato7=:dato7,dato8=:dato8,dato9=:dato9,dato10=:dato10,dato11=:dato11,dato12=:dato12,dato13=:dato13,dato14=:dato14,dato15=:dato15,dato16=:dato16,dato17=:dato17,dato18=:dato18,dato19=:dato19,dato20=:dato20,dato24=:dato24 
    // WHERE dato2=:dato2 ";
	//$sqlquery = "INSERT INTO ".$dbname.".datoscasas (id,dato1,dato2,dato3,dato4,dato5,dato6,dato7,dato8,dato9,dato10,dato11,dato12,dato13,dato14,dato15,dato16,dato17,dato18,dato19,dato20,dato24)
    //VALUES (:id, :dato1, :dato2, :dato3, :dato4, :dato5, :dato6, :dato7, :dato8, :dato9, :dato10, :dato11, :dato12, :dato13, :dato14, :dato15, :dato16, :dato17, :dato18, :dato19, :dato20, :dato24)";
    $stmt = $conn->prepare("INSERT INTO ".$dbname.".datoscasas (id,dato1,dato2,dato3,dato4,dato5,dato6,dato7,dato8,dato9,dato10,dato11,dato12,dato13,dato14,dato15,dato16,dato17,dato18,dato19,dato20,dato24)
    VALUES (:id, :dato1, :dato2, :dato3, :dato4, :dato5, :dato6, :dato7, :dato8, :dato9, :dato10, :dato11, :dato12, :dato13, :dato14, :dato15, :dato16, :dato17, :dato18, :dato19, :dato20, :dato24)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':dato1', $dato1);
    $stmt->bindParam(':dato2', $dato2);
	$stmt->bindParam(':dato3', $dato3);
	$stmt->bindParam(':dato4', $dato4);
	$stmt->bindParam(':dato5', $dato5);
	$stmt->bindParam(':dato6', $dato6);
	$stmt->bindParam(':dato7', $dato7);
	$stmt->bindParam(':dato8', $dato8);
	$stmt->bindParam(':dato9', $dato9);
	$stmt->bindParam(':dato10', $dato10);
	$stmt->bindParam(':dato11', $dato11);
	$stmt->bindParam(':dato12', $dato12);
	$stmt->bindParam(':dato13', $dato13);
	$stmt->bindParam(':dato14', $dato14);
	$stmt->bindParam(':dato15', $dato15);
	$stmt->bindParam(':dato16', $dato16);
	$stmt->bindParam(':dato17', $dato17);
	$stmt->bindParam(':dato18', $dato18);
	$stmt->bindParam(':dato19', $dato19);
	$stmt->bindParam(':dato20', $dato20);
	$stmt->bindParam(':dato24', $dato24);
	}
	catch(PDOException $e)
    {
    //$conn->rollback();
    echo "failed: total" . $e->getMessage();
    }
	$lineaori = fgets($fp);
	
	while(!feof($fp)) {    
		$lineaori = fgets($fp); 
		$linea = str_replace($healthy, $yummy, $lineaori);
		$arraydatossql = explode(",", $linea);
		print_r($arraydatossql[0]);
		print_r($arraydatossql[1]);
		print_r($arraydatossql[2]);
		///echo "<br />";
        echo $linea . "<br />";				
			

	try {
    // insert a row
	$numajusta = 0;
    $id = "1";
    $dato1 = $arraydatossql[$numajusta];//"Doe";
    $dato2 = $arraydatossql[$numajusta+=1];//"206";
    $dato3 = $arraydatossql[$numajusta+=1];//"j";
    $dato4 = $arraydatossql[$numajusta+=1];//"j";este es 3
    if (sizeof($arraydatossql)==21) $dato5 = substr($arraydatossql[$numajusta+=1],1).$arraydatossql[$numajusta+=1];
    if (sizeof($arraydatossql)==22) $dato5 = substr($arraydatossql[$numajusta+=1],1).$arraydatossql[$numajusta+=1].$arraydatossql[$numajusta+=1];
    $dato6 = $arraydatossql[$numajusta+=1];//"j";6
    $dato7 = $arraydatossql[$numajusta+=1];//"j";
    $dato8 = $arraydatossql[$numajusta+=1];//"j";
    $dato9 = $arraydatossql[$numajusta+=1];//"9";
    $dato10 = $arraydatossql[$numajusta+=1];
    $dato11 = $arraydatossql[$numajusta+=1];
    $dato12 = $arraydatossql[$numajusta+=1];
    $dato13 = $arraydatossql[$numajusta+=1];
    $dato14 = $arraydatossql[$numajusta+=1];
    $dato15 = $arraydatossql[$numajusta+=1];
    $dato16 = $arraydatossql[$numajusta+=1];//16
    $dato17 = $arraydatossql[$numajusta+=1];
    $dato18 = $arraydatossql[$numajusta+=1];
    $dato19 = $arraydatossql[$numajusta+=1];
    $dato20 = $arraydatossql[$numajusta+=1];//20
    $dato24 = $zip_code;
	 
    $stmt->execute();
	$last_id = $conn->lastInsertId();
    echo " <br/>New record created successfully ".$last_id . " la cantidad de datos es " . sizeof($arraydatossql) . "  <br/>  ";
	}
	catch(PDOException $e)
    {
    //$conn->rollback();
    echo "failed: 1" . $e->getMessage();
    }
			
        }    
	fclose($fp); 
	$conn = null;
	
} else {
    echo "El fichero $nombre_fichero no existe";
}
} catch (Exception $e) {
echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}    
?> 