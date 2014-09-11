<?php

namespace FakerXss;

use Faker\Provider\Base;

/**
 * Provider for the Faker generator
 */
class Xss extends Base
{

    public function xss($string = 'XSS')
    {
        return "<script>alert('$string');</script>";
    }
}
