<?php

$id = $_GET['id'];
$zipcode = $_GET['zipcode'];
$county = $_GET['county'];
$city = $_GET['city'];
$price = $_GET['price'];
$system = $_GET['systemFiltro'];

include("../datosiniciales.php");

try {
    $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

if($id != ''){

    $query = $mysql->prepare("SELECT * FROM datoscasas WHERE dato2 LIKE :id AND dato6 = 'A'");
    $query->execute([':id' => "%$id%"]);
    $rows = $query->fetchAll();

    foreach ($rows as $row):

        include('tpl-property-list.php');

    endforeach;

}else{

    switch ($price) {

        default:

        case '-':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':system' => "%$system%",
                ':city' => "%$city%"
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');


            endforeach;

            break;

        case '1-75':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 <= :price AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':city' => "%$city%",
                ':system' => "%$system%",
                ':price' => '75000'
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');

            endforeach;

            break;
        case '75-150':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB  AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':city' => "%$city%",
                ':system' => "%$system%",
                ':priceA' => '75000',
                ':priceB' => '150000'
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');

            endforeach;

            break;
        case '150-300':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':city' => "%$city%",
                ':system' => "%$system%",
                ':priceA' => '150000',
                ':priceB' => '300000'
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');

            endforeach;

            break;
        case '300-600':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':city' => "%$city%",
                ':system' => "%$system%",
                ':priceA' => '300000',
                ':priceB' => '600000'
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');

            endforeach;

            break;
        case '600-900':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':city' => "%$city%",
                ':system' => "%$system%",
                ':priceA' => '600000',
                ':priceB' => '900000'
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');

            endforeach;

            break;
        case '900-mas':

            $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :price AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
            $queryOne->execute([
                ':zipcode' => "%$zipcode%",
                ':county' => "%$county%",
                ':city' => "%$city%",
                ':system' => "%$system%",
                ':price' => '900000'
            ]);

            $rowsOne = $queryOne->fetchAll();

            foreach ($rowsOne as $row):

                include('tpl-property-list.php');

            endforeach;

            break;
    }

}
