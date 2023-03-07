<?php
/**
 * Created by PhpStorm.
 * User: tottimalossi
 * Date: 07.03.22
 * Time: 18:08.
 */

namespace tottimalossi\SmmAPI;

class OrderAPI
{
    public $service = 0;
    public $link = '';
    public $quantity = 0;

    /**
     * OrderAPI constructor.
     *
     * @param $service
     * @param $link
     * @param $quantity
     */
    public function __construct(int $service, string $link, int $quantity)
    {
        $this->service = $service;
        $this->link = $link;
        $this->quantity = $quantity;
    }

    public function toArray()
    {
        return (array) $this;
    }
}
