<?php
function baglan() {
  $baglan=new PDO("mysql:host=localhost;dbname=sepet;charset=utf8","fatih","1234");
  return $baglan;
}
?>