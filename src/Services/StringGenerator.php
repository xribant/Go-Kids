<?php

namespace App\Services;

/**
 * Class StringGenerator
 */
class StringGenerator
{
    public function randomString($length)
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;

        for ($i = 0; $i < $length; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
    	}

    	return implode($pass);
    }
}