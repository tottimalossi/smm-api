<?php
/**
 * Created by PhpStorm.
 * User: backend
 * Date: 26.03.18
 * Time: 9:41.
 */

namespace tottimalossi\SmmAPI\ISmmAPI;

use tottimalossi\SmmAPI\OrderAPI;

interface ISmmAPI
{
    /**
     * @return float
     */
    public function getBalance();

    /**
     * @return mixed
     */
    public function getServices();

    /**
     * @param OrderAPI $order
     *
     * @return mixed
     */
    public function orderCreate(OrderAPI $order);

    /**
     * @param int $orderID
     *
     * @return mixed
     */
    public function orderStatus(int $orderID);
}
