<?php

namespace Phpackage\Autodns\Tests;

use Faker\Factory;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $faker;

    public function __construct()
    {
        parent::__construct();
        $this->faker = Factory::create();
    }
}
