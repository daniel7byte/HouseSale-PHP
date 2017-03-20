<?php

$id = ($_GET['id'] == '-' ? '' : $_GET['id']);
$zipcode = ($_GET['zipcode'] == '-' ? '' : $_GET['zipcode']);
$county = ($_GET['county'] == '-' ? '' : $_GET['county']);
$city = ($_GET['city'] == '-' ? '' : $_GET['city']);
$priceMin = ($_GET['price-min'] == '-' ? '' : $_GET['price-min']);
$priceMax = ($_GET['price-max'] == '-' ? '' : $_GET['price-max']);
$system = ($_GET['systemFiltro'] == '-' ? '' : $_GET['systemFiltro']);

if($id != ''){

    $query = $mysql->prepare("SELECT * FROM datoscasas WHERE dato2 LIKE :id AND dato6 = 'A'");
    $query->execute([':id' => "%$id%"]);
    $rows = $query->fetchAll();

}else{

    if($priceMax < 900000) {
        $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceMin AND dato5 <= :priceMax  AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
       
        $queryOne->execute([
            ':zipcode' => "%$zipcode%",
            ':county' => "%$county%",
            ':system' => "%$system%",
            ':city' => "%$city%",
            ':priceMin' => $priceMin,
            ':priceMax' => $priceMax
        ]);
    } else {
        $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceMin AND dato6 = 'A' AND dato24 LIKE :zipcode AND id LIKE :system");
       
        $queryOne->execute([
            ':zipcode' => "%$zipcode%",
            ':county' => "%$county%",
            ':system' => "%$system%",
            ':city' => "%$city%",
            ':priceMin' => $priceMin
        ]);
    }

    $rows = $queryOne->fetchAll();

}
