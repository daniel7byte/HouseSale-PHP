#ZIPCODES

#Listar todos los zipcodes sin reptir
SELECT DISTINCT dato24 FROM datoscasas ORDER BY dato24 ASC;

#Lista county sin repetir, de un zipcode
SELECT DISTINCT dato11 FROM datoscasas WHERE dato24=30005 ORDER BY dato11 ASC;

#Lista city sin repetir, de un zipcode
SELECT DISTINCT dato10 FROM datoscasas WHERE dato24=30005 ORDER BY dato10 ASC;




#COUNTY

#Listar todos los county sin reptir
SELECT DISTINCT dato11 FROM datoscasas ORDER BY dato11 ASC;

#Lista zipcodes sin repetir, de un county
SELECT DISTINCT dato24 FROM datoscasas WHERE dato11='Cherokee' ORDER BY dato24 ASC;

#Lista city sin repetir, de un county
SELECT DISTINCT dato10 FROM datoscasas WHERE dato11='Cherokee' ORDER BY dato10 ASC;




#CITY

#Listar todos los city sin reptir
SELECT DISTINCT dato10 FROM datoscasas ORDER BY dato10 ASC;

#Lista zipcodes sin repetir, de un city
SELECT DISTINCT dato24 FROM datoscasas WHERE dato10='Alpharetta' ORDER BY dato24 ASC;

#Lista county sin repetir, de un city
SELECT DISTINCT dato11 FROM datoscasas WHERE dato10='Alpharetta' ORDER BY dato11 ASC;
