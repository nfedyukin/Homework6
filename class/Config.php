<?php


class Config
{
    protected $config = [];

    public function __construct($path)
    {
        $this->config = include($path);
    }

    public function getParamValue(string $paramName)
    {
        return $this->config[$paramName];
    }
}