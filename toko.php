<?php
require_once('struk.php');
require_once('menu.php');

class Toko {
    private $idToko;
    private $namaToko;
    private $alamatToko;
    private $noHpToko;
    private $website;

    public function __construct($idToko, $namaToko, $alamatToko, $noHpToko, $website) {
        $this->idToko = $idToko;
        $this->namaToko = $namaToko;
        $this->alamatToko = $alamatToko;
        $this->noHpToko = $noHpToko;
        $this->website = $website;
    }

    public function getIdToko() {
        return $this->idToko;
    }

    public function setIdToko($idToko) {
        $this->idToko = $idToko;
    }

    public function getNamaToko() {
        return $this->namaToko;
    }

    public function setNamaToko($namaToko) {
        $this->namaToko = $namaToko;
    }

    public function getAlamatToko() {
        return $this->alamatToko;
    }

    public function setAlamatToko($alamatToko) {
        $this->alamatToko = $alamatToko;
    }

    public function getNoHpToko() {
        return $this->noHpToko;
    }

    public function setNoHpToko($noHpToko) {
        $this->noHpToko = $noHpToko;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }

    public function __destruct() {

    }

}

class Kasir {
    private $idKasir;
    private $namaKasir;
    private $noKassa;

    public function __construct($idKasir, $namaKasir, $noKassa) {
        $this->idKasir = $idKasir;
        $this->namaKasir = $namaKasir;
        $this->noKassa = $noKassa;
    }

    public function getIdKasir() {
        return $this->idKasir;
    }

    public function setIdKasir($idKasir) {
        $this->idKasir = $idKasir;
    }

    public function getNamaKasir() {
        return $this->namaKasir;
    }

    public function setNamaKasir($namaKasir) {
        $this->namaKasir = $namaKasir;
    }

    public function getNoKassa() {
        return $this->noKassa;
    }

    public function setNoKassa($noKassa) {
        $this->noKassa = $noKassa;
    }


    public function __destruct() {

    }

}

