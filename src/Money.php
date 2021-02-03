<?php
namespace www\Vladimirhw4;
class Money
{
    private $amount;
    private $currency;


    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;

    }


    public function getAmount()
    {
        return $this->amount;

    }


    public function setAmount($amount)
    {
        $this->amount = $amount;
        if(!is_int($amount)){
            throw new Exception('Enter and integer');
        }
    }


    public function getCurrency()
    {
        return $this->currency;
    }


    public function setCurrency($currency)
    {
        $this->currency = $currency;
        $array = ['USD', 'EUR', 'UAH', 'RUB'];
        if (!in_array($this->currency,$array)){
            throw new InvalidArgumentException('Enter correct currency');
        }
    }
    public function equalmc($equalmc)
    {
        if ( ($this->getAmount() == $equalmc -> getAmount() ) && ($this->getCurrency() == $equalmc -> getCurrency() ) ){
            return true;
        } else {
            return false;
        }
    }
    public function add(Money $add)
    {
        if ($this->getCurrency() !== $add->getCurrency()){
            throw new \Exception('Different currencies');
        } $summ = ($this->getAmount() + $add ->getAmount());
        return $summ;
        return $add->getCurrency();

    }
}






