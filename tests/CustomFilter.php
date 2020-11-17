<?php

use muvaldev\Sanitizer\Contracts\Filter;

class CustomFilter implements Filter
{
    /**
     * @param $value
     * @param array $options
     * @return mixed
     */
    public function apply($value, $options = [])
    {
        return $value.$value;
    }
}
