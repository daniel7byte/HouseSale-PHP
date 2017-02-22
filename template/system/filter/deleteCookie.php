<?php

setcookie("id", "", time()-3600);
setcookie("zipcode", "", time()-3600);
setcookie("county", "", time()-3600);
setcookie("city", "", time()-3600);
setcookie("systemFiltro", "", time()-3600);
setcookie("price", "", time()-3600);

echo "Cookie Deleted";