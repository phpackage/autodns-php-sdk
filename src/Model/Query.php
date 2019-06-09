<?php

namespace Phpackage\Autodns\Model;

class Query
{
    /**
     * @var QueryFilter[]
     */
    private $filters = [];

    /**
     * @var QueryView
     */
    private $view;

    /**
     * @var QueryOrder[]
     */
    private $orders = [];

    public function __construct()
    {
        $this->view = new QueryView();
    }

    /**
     * @return QueryFilter[] $filters
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * @param QueryFilter[] $filters
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param QueryFilter $filter
     * @return $this
     */
    public function addFilter(QueryFilter $filter)
    {
        $this->filters[] = $filter;

        return $this;
    }

    /**
     * @return QueryView
     */
    public function getView(): QueryView
    {
        return $this->view;
    }

    public function setView(QueryView $view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return QueryOrder[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    public function addOrder(QueryOrder $order)
    {
        $this->orders[] = $order;

        return $this;
    }
}
