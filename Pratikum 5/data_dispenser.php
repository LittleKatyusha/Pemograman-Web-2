<h2 syle="padding: 20px;">Dispenser</h2>
<?php
include_once "class_dispenser.php";


$pelanggan1 = new dispenser("Habibie", "teh panas", 2000);
$pelanggan2 = new dispenser("Edward", "teh panas", 2000);



$pelanggan1->setVolume(5000);
$pelanggan2->setVolume(4625);
echo "Volume Galon : " . $pelanggan1->getVolume() . "<br>";





echo $pelanggan1->tehPanas() . "<br>";
echo $pelanggan1->nambah_tehPanas() . "<br>";
echo $pelanggan2->tehPanas() . "<br><hr>";

?>
