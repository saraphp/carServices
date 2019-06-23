<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 23/06/19
 * Time: 09:28 م
 */

namespace Assesment\Classes\Services;


class BasicInspection
{
    private $cost;

    public function construct($cost =50) {

        $this->cost = $cost;
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
     * @return string
     */
    public function feedBack(){

        return ' is interested in Basic Inspection';
    }
}