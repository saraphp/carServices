<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 23/06/19
 * Time: 09:27 م
 */

namespace Assesment\Classes;


class CarInspection
{
    protected $services;
    protected $customerName;
    protected $cost;

    public function __construct($customerName="", $services = array()) {
        $this->customerName = $customerName;
        $this->services = $services;

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
        $total = 0;
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
}