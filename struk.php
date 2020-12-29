<?php
require_once('toko.php');
require_once('menu.php');

class Struk
{
    private $idStruk;
    private $tglOrder;
    private $waktuOrder;
    private $tipeOrder;
    private $tempSubTotal;
    private $subTotal;
    private $qtyTotal;
    private $totalDiskon;
    private $kembalian;
    private $totalPajak;
    private $cash;
    private $listPrice = array();
    private $listOrderCount = array();

    public function __construct($idStruk, $tglOrder, $waktuOrder, $tipeOrder, $cash)
    {
        $this->idStruk = $idStruk;
        $this->tglOrder = $tglOrder;
        $this->waktuOrder = $waktuOrder;
        $this->tipeOrder = $tipeOrder;
        $this->cash = $cash;
    }

    public function getListPrice()
    {
        return $this->listPrice;
    }


    public function getIdStruk()
    {
        return $this->idStruk;
    }

    public function setIdStruk($idStruk)
    {
        $this->idStruk = $idStruk;
    }

    public function getTglOrder()
    {
        return $this->tglOrder;
    }

    public function setTglOrder($tglOrder)
    {
        $this->tglOrder = $tglOrder;
    }

    public function getWaktuOrder()
    {
        return $this->waktuOrder;
    }

    public function setWaktuOrder($waktuOrder)
    {
        $this->waktuOrder = $waktuOrder;
    }

    public function getTipeOrder()
    {
        return $this->tipeOrder;
    }

    public function setTipeOrder($tipeOrder)
    {
        $this->tipeOrder = $tipeOrder;
    }

    public function getTempSubtotal()
    {
        return $this->tempSubTotal;
    }

    public function setTempSubtotal($tempSubTotal)
    {
        $this->tempSubTotal = $tempSubTotal;
    }

    public function getSubTotal()
    {
        return $this->subTotal;
    }

    public function setSubTotal($tipeOrder)
    {
        $this->tipeOrder = $tipeOrder;
    }

    public function getQtyTotal()
    {
        return $this->qtyTotal;
    }

    public function setQtyTotal($qtyTotal)
    {
        $this->qtyTotal = $qtyTotal;
    }

    public function getTotalDiskon()
    {
        return $this->totalDiskon;
    }

    public function setTotalDiskon($totalDiskon)
    {
        $this->totalDiskon = $totalDiskon;
    }

    public function getTotalPajak()
    {
        $this->getTax();
        return $this->totalPajak;
    }

    public function setTotalPajak($totalPajak)
    {
        $this->totalPajak = $totalPajak;
    }

    public function getKembalian()
    {
        return $this->kembalian;
    }

    public function setKembalian($kembalian)
    {
        $this->kembalian = $kembalian;
    }

    public function getCash()
    {
        return $this->cash;
    }

    public function setCash($cash)
    {
        $this->cash = $cash;
    }


    public function getEachMenuPrice($menus) {
        foreach ($menus as $menu) {
            $this->listPrice[] = $menu->getFinalPrice();
        }
    }

    public function hitungSubTotalSementara($menus) {
        $this->getEachMenuPrice($menus);
        foreach ($this->listPrice as $price) {
            $this->tempSubTotal += $price;
        }
    }

    public function getTax() {
        $this->totalPajak = $this->tempSubTotal * 0.1;
    }


    public function hitungSubTotal() {
        $this->subTotal = $this->tempSubTotal * 1.1;
    }


    public function hitungKembalian() {
        $this->kembalian = $this->cash - $this->subTotal;
    }

    public function getItemsQuantities($menus) {
        foreach ($menus as $menu) {
            $this->listOrderCount[] = $menu->getOrderCount();
        }
    }

    public function hitungJumlahItem($menus) {
        $this->getItemsQuantities($menus);
        foreach ($this->listOrderCount as $qty) {
            $this->qtyTotal += $qty;
        }
    }

    public function __destruct() {

    }


}