<?php


class Staff
{
    private $idStaff;
    private $nmStaff;
    private $emailStaff;
    private $bioStaff;
    private $jabatanStaff;
    private $imageStaff;

    public function __construct($idStaff, $nmStaff, $emailStaff, $bioStaff, $jabatanStaff, $imageStaff)
    {
        $this->idStaff = $idStaff;
        $this->nmStaff = $nmStaff;
        $this->emailStaff = $emailStaff;
        $this->bioStaff = $bioStaff;
        $this->jabatanStaff = $jabatanStaff;
        $this->imageStaff = $imageStaff;
    }

    public function getIdStaff()
    {
        return $this->idStaff;
    }

    public function setIdStaff($idStaff)
    {
        $this->idStaff = $idStaff;
    }

    public function getNmStaff()
    {
        return $this->nmStaff;
    }

    public function setNmStaff($nmStaff)
    {
        $this->nmStaff = $nmStaff;
    }


    public function getEmailStaff()
    {
        return $this->emailStaff;
    }

    public function setEmailStaff($emailStaff)
    {
        $this->emailStaff = $emailStaff;
    }

    public function getBioStaff()
    {
        return $this->bioStaff;
    }

    public function setBioStaff($bioStaff)
    {
        $this->bioStaff = $bioStaff;
    }

    public function getJabatanStaff()
    {
        return $this->jabatanStaff;
    }

    public function setJabatanStaff($jabatanStaff)
    {
        $this->jabatanStaff = $jabatanStaff;
    }

    public function getImageStaff()
    {
        return $this->imageStaff;
    }

    public function setImageStaff($imageStaff)
    {
        $this->imageStaff = $imageStaff;
    }

    public function cetakStaff()
    {
        $output = '

    <div class="row">
        <div class="column">
            <div class="card d-flex justify-content-center">
                <img src="'. $this->getImageStaff() .'" alt="'. $this->getNmStaff() .'" style="width:100%">
                <div class="container">
                    <h2>'. $this->getNmStaff() .'</h2>
                    <p class="title">' . $this->getJabatanStaff() . '</p>
                    <p>"'. $this->getBioStaff() .'"</p>
                    <p>'. $this->getEmailStaff() .'</p>
                    <p><a href="../contact.php"><button class="button">Contact Us</button></a></p>
                </div>
            </div>
        </div>
    </div>
        ';
        echo $output;
    }

    public function __destruct()
    {

    }

}