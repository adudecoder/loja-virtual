<?php

namespace App\Controllers;

use App\Classes\Uri;

class Method
{

    private $uri;

    public function __construct()
    {
        $this->uri = new Uri;
    }

    private function getMethod()
    {
        if (!$this->uri->emptyUri()) {
            $exprodeUri = array_filter(explode('/', $this->uri->getUri()));
            return (!isset($exprodeUri[2])) ?: $exprodeUri[2];
        }
    }

    public function method($object)
    {
        if (method_exists($object, $this->getMethod())) {
            return $this->getMethod();
        }
        return DEFAULT_METHOD;
    }
}
