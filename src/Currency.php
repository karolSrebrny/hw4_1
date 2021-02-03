<?php
namespace www\Vladimirhw4;
class Currency
{
    private $isoCode;

    public  function  __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
        $array = ['USD', 'EUR', 'UAH', 'RUB'];
        if (!in_array($this->isoCode,$array)){
            throw new InvalidArgumentException('Enter correct currency');
       }
    }

    public function equalCurrency($equalcurrency)
    {
        if  ($this->getIsoCode() == $equalcurrency -> getIsoCode() ) {
            return true;
        } else {
            return false;
        }
    }

}




