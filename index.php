
<!-- https://sypexgeo.net/ -->

<?php
// Получаем ip
// узнаем ip посетителя
// include("SxGeo.php");
// require_once 'SxGeo.php';
// include("weather.html");
// import dataIp;
// получим ip клиента
$ip = $_SERVER['REMOTE_ADDR'];
// подключим файл SxGeo.php
require_once 'SxGeo.php';

echo($ip);
// // подключаем файл с базой данных городов
// $SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
// $city = $SxGeo->get($ip);
// // также можно использовать следующий код
// // $SxGeo->getCity($ip);

// // широта
// $lat = $city['city']['lat'];
// // долгота
// $lon = $city['city']['lon'];
// // название города на русском языке
// $city_name_ru = $city['city']['name_ru'];
// // название города на английском языке
// $city_name_en = $city['city']['name_en'];
// // ISO-код страны
// $country_code = $city['country']['iso'];

// // для получения информации более полной информации (включая регион) можно осуществить через метод getCityFull
// $city = $SxGeo->getCityFull($ip);
// // название региона на русском языке
// $region_name_ru = $city['region']['name_ru'];
// // название региона на английском языке
// $region_name_en = $city['city']['name_en'];
// // ISO-код региона
// $region_name_iso = $city['city']['iso'];




// function getIp(){
// 		$keys = [
// 			'HTTP_CLIENT_IP',
// 			'HTTP_X_FORWARDED_FOR',
// 			'REMOTE_ADDR'
// 		];
// 		foreach ($keys as $key) {
// 				if (!empty($_SERVER[$key])){
// 						$ip = trim(end(explode(',', $_SERVER[$key])));
// 						if (filter_var($ip, FILTER_VALIDATE_IP)){
// 							return $ip;
// 						}
// 				}
// 		}
// }

// $ip = getIp();
// console.log(dataIp);

// echo ('IP: ' .$ip. '<br>');

// $SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
// // $country = $SxGeo->getCountry($ip);
// $city = $SxGeo->getCityFull($ip);
// var_dump($city);
