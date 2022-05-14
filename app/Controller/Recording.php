<?php

namespace Controller;

use Src\View;

class Recording
{
    public function Recording(): string
    {
        return new View('site.Recording', ['message' => 'hello working']);
    }
}