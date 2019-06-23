<?php

namespace Phpackage\Autodns\Xml\Task;

use Phpackage\Autodns\Xml\Model\Order;
use Phpackage\Autodns\Xml\Model\View;
use Phpackage\Autodns\Xml\Model\Where;

class Task
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var array
     */
    private $key;

    /**
     * @var View
     */
    private $view;

    /**
     * @var Order
     */
    private $order;

    /**
     * @var Where
     */
    private $where;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return array
     */
    public function getKey(): ?array
    {
        return $this->key;
    }

    /**
     * @param array $key
     */
    public function setKey(array $key): void
    {
        $this->key = $key;
    }

    /**
     * @param string $key
     */
    public function addKey(string $key): void
    {
        $this->key[] = $key;
    }

    /**
     * @return View
     */
    public function getView(): ?View
    {
        return $this->view;
    }

    /**
     * @param View $view
     */
    public function setView(View $view): void
    {
        $this->view = $view;
    }

    /**
     * @return Order
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return Where
     */
    public function getWhere(): ?Where
    {
        return $this->where;
    }

    /**
     * @param Where $where
     */
    public function setWhere(Where $where): void
    {
        $this->where = $where;
    }
}
