<?php

namespace BEAR\Middleware;

use BEAR\AppMeta\AbstractAppMeta;

class FakeAppMeta extends AbstractAppMeta
{
    public function getResourceListGenerator() : \Generator
    {
    }
}
