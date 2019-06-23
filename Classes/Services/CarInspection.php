<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 23/06/19
 * Time: 09:27 م
 */

namespace Assessment\Services;


class CarInspection
{
    protected $services;
    protected $customerName;
    protected $cost;

    public function __construct($customerName = "", $services = array()) {

        $this->customerName = $customerName;
        $this->services = $services;
        $this->cost =50;

    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return int
     */
    public function totalCost() {
        $total = $this->getCost();
        foreach($this->services as $service) {
            $total += $service->getCost();
        }

        return $total;

    }

    /**
     * @return string
     */
    public function feedBack(){

        return $this->customerName .' is interested in Basic Inspection';
    }

    /**
     * @return string
     */
    public function totalFeedBack(){

        if(!$this->services){
            return $this->feedBack();
        }
        $message =$this->customerName .' ';
        foreach($this->services as $service) {

            $message .= $service->feedBack();
        }
        return $message;
    }
}