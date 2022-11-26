<?php
function baglan() {
  $baglan=new PDO("mysql:host=localhost;dbname=rehber;charset=utf8","fatih","1234");
	$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  return $baglan;
}
?>