<?php
class Customer {
    private $idCustomer;
    private $nmCustomer;
    private $noHpCustomer;

    public function __construct($idCustomer, $nmCustomer, $noHpCustomer){
        $this->idCustomer = $idCustomer;
        $this->nmCustomer = $nmCustomer;
        $this->noHpCustomer = $noHpCustomer;
    }

    public function getIdCustomer() {
        return $this->idCustomer;
    }

    public function setIdCustomer($idCustomer) {
        $this->idCustomer = $idCustomer;
    }

    public function getNmCustomer() {
        return $this->nmCustomer;
    }

    public function setNmCustomer($nmCustomer) {
        $this->nmCustomer = $nmCustomer;
    }


    public function getNoHpCustomer() {
        return $this->noHpCustomer;
    }

    public function setNoHpCustomer($noHpCustomer) {
        $this->noHpCustomer = $noHpCustomer;
    }

    public function __destruct() {

    }

}