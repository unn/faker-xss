<?php

namespace FakerXss\tests;

use \FakerXss\Xss;

class FakerXssTest extends \PHPUnit_Framework_TestCase
{
    public function testXss()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Xss($faker));
        $xss = $faker->xss;
        $this->assertEquals("<script>alert('XSS');</script>", $xss);
    }

    public function testXssCustom()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Xss($faker));
        $xss = $faker->xss('Stoline');
        $this->assertEquals("<script>alert('Stoline');</script>", $xss);
    }
}
