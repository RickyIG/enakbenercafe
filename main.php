<?php
require_once('data.php');
require_once __DIR__ . '/vendor/autoload.php';

foreach($menus as $menu) {
    $menu->setOrderCount($_POST[(int) $menu->getIdMenu()]);
}
$struk1->setCash($_POST[(int) $struk1->getCash()]);
$customer1->setIdCustomer($_POST[(int) $customer1->getIdCustomer()]);
if ($customer1->getIdCustomer() == null) {
    $rand = rand(100000000, 999999999);
    $customer1 -> setIdCustomer($rand);
}
$struk1->setTipeOrder($_POST[$struk1->getIdStruk()]);
$randomIdStruk = rand(1000000000, 9999999999);
$struk1->setIdStruk($randomIdStruk);

$struk1->hitungSubTotalSementara($menus);
$struk1->hitungSubTotal();
$struk1->hitungJumlahItem($menus);
$struk1->hitungKembalian();

$struk .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">";
$struk .= "<pre class='kop'>" . $resto->getNamaToko() . "</pre>";
$struk .= "<pre class='kop'>" . $resto->getAlamatToko()."</pre>";
$struk .= "<pre class='kop'>Telp. ". $resto->getNoHpToko() . "</pre>";
$struk .= "<pre class='kop'>" . $resto->getWebsite() . "</pre>";
$struk .= "<br>";
$struk .= "<pre class='kop'>". $struk1->getTipeOrder() . "</pre>";

$struk .= "<pre>--------------------------------------------------------------------------</pre>";

foreach($menus as $menu) {
    if ($menu->getOrderCount() == 0) {
        continue;
    }
    if ($menu instanceof Drink) {
        $struk .= "<pre class='strukmenu'>" . $menu->getNamaMenu() . "  [" . $menu->getType() . "]<br>";
    } else {
        if ($menu->getKepedasan())
            $struk .= "<pre class='strukmenu'>" . $menu->getNamaMenu() . "  Level Pedas : [" . $menu->getKepedasan() . "]<br>";
        else {
            $struk .= "<pre class='strukmenu'>" . $menu->getNamaMenu() . "<br>";
        }
    }
    if($menu->getPromo() == 1) {
        $struk .= "<table class='tabelperitem'>
                    <tr>
                        <th class='kuantitasperitem'>".$menu->getOrderCount()."</th>
                        <th class='hurufx'>x</th>
                        <th class='hargaperitem'>".$menu->getPrice()."</th>
                        <th class='tekspromo'></th>
                        <th class='hargasetelahdikali'>".$menu->getFinalPrice()."</th>
                    </tr>
                    </table>";
    } else {
        $struk .= "<table class='tabelperitem'>
                    <tr>
                        <th class='kuantitasperitem'>".$menu->getOrderCount()."</th>
                        <th class='hurufx'>x</th>
                        <th class='hargaperitem'>".$menu->getPrice()."</th>
                        <th class='tekspromo'>".$menu->getTextPromo()."</th>
                        <th class='hargasetelahdikali'>".$menu->getFinalPrice()."</th>
                    </tr>
                    </table>";
    }
    /*
    $struk .= "</pre>";
    $struk .= "<p class='itempricestruk'>".$menu->getFinalPrice() ."</p>";
    */

}

$struk .= "<pre class='details'>                                            ----------------</pre>";


$struk .= "<table class='tabelsubtotal'><tr><th class='perinci'>Sub Total</th> <th class='detilharga'>".$struk1->getTempSubTotal()."</th></tr></table>";

$struk .= "<pre class='details'>                                            ----------------</pre>";
$struk .= "<table class='tabelsubtotal'>
            <tr>
                <th class='perinci'>Dasar Pengenaan Pajak</th>
                <th class='detilharga'>".$struk1->getTempSubTotal()."</th>
            </tr>
            <tr>
                <th class='perinci'>P. Rest 10%</th>
                <th class='detilharga'>".$struk1->getTotalPajak()."</th>
            </tr>
            </table>";
$struk .= "<pre class='details'>                                            ----------------</pre>";
$struk .= "<table class='tabelsubtotal'>
            <tr>
                <th class='perinci'>Total</th>
                <th class='detilharga'>"."<font size='6'>".$struk1->getSubTotal()."</font>"."</th>
            </tr>
            <tr>
                <th class='perinci'>Cash</th>
                <th class='detilharga'>".$struk1->getCash()."</th>
            </tr>
            </table>";
$struk .= "<pre class='details'>                                            ----------------</pre>";
$struk .= "<table class='tabelsubtotal'><tr><th class='perinci'>Kembali</th> <th class='detilharga'>".$struk1->getKembalian()."</th></tr></table>";
$struk .= "<pre class='details'>                                              Terima Kasih  </pre>";


$struk .= "<pre>--------------------------------------------------------------------------</pre>";
$struk .= "<pre class='footer'> No. Customer : ".$customer1->getIdCustomer()."</pre>";
$struk .= "<pre class='footer'>".$struk1->getQtyTotal()." Items, ". $struk1->getIdStruk()." ". $struk1->getWaktuOrder()."</pre>";
$struk .= "<pre class='footer'>".$kasir1->getNamaKasir().", ".$kasir1->getIdKasir().", ".$kasir1->getNoKassa().", ". $struk1->getTglOrder();
$struk .= "<pre class='footer'>DAPATKAN INFO LOWONGAN KERJA</pre>";
$struk .= "<pre class='footer'>DI " . $resto->getWebsite() . "</pre>";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($struk);
$mpdf->Output('StrukPembayaran.pdf', 'D');


