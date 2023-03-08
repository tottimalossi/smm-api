<?php
/**
 * Created by PhpStorm.
 * User: backend
 * Date: 26.03.18
 * Time: 9:41.
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
