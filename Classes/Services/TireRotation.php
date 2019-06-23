<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 23/06/19
 * Time: 09:28 م
 */

namespace Assessment\Services;


class TireRotation
{
    private $cost;

    public function construct($cost =23.5) {

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

    public function feedBack(){

        return 'interested in carrying out Tire Rotation';
    }
}