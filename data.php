<?php
require_once('struk.php');
require_once('toko.php');
require_once('menu.php');
require_once('customer.php');
require_once('staff.php');

$resto = new Toko("T001", "Enak Bener Restaurant", "Jl. Hebat No. 34 Tasikmalaya", "082317880077", "rickyig.github.io");


$food1 = new Food("Krabby Patty", "15000", "1", "1", "images/burger.png");
$food1->setDesc("Kedua roti empuk yang diisi dengan daging, lembaran keju, bawang, tomat, dan selada serta diberi saus mayones.");
$food1->setKepedasan(1);
$food2 = new Food("French Fries", "12000", "0.9", "1", "images/frenchfries.png");
$drink1 = new Drink("Lemon Tea", "10000", "1", "1", "Dingin", "images/lemontea.png");
$drink1->setDesc("Minuman dari lemon asli yang sangat menyegarkan. Dijamin hausnya pasti hilang!");
$drink2 = new Drink("Coke", "11000", "1", "1", "Dingin", "images/coke.png");
$drink3 = new Drink("Espresso Coffee", "20000", "1", "1", "Panas", "images/espresso.png");

$menus = array($food1, $food2, $drink1, $drink2);

$kasir1 = new Kasir("ID-DJSM-INA", "Rachel", "POS001");

$customer1 = new Customer("197006029", "Ricky Indra Gunawan", "081234554321");

$struk1 = new Struk("93843204", "15-11-2020", "01:19:30", "TAKE AWAY", 200000);

$staff1 = new Staff("1", "Ricky Indra Gunawan", "197006029@student.unsil.ac.id", "All 
you need is a notepad and the world becomes your canvas.", "CEO & Founder", "../images/camera.png");


