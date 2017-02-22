<?php

setcookie("id", $_GET['id'], time()+3600);
setcookie("zipcode", $_GET['zipcode'], time()+3600);
setcookie("county", $_GET['county'], time()+3600);
setcookie("city", $_GET['city'], time()+3600);
setcookie("systemFiltro", $_GET['systemFiltro'], time()+3600);
setcookie("price", $_GET['price'], time()+3600);

echo "Cookie Created".$_COOKIE['price'];