<?php

namespace Zulip\Resource;

class Filters extends AbstractResource
{
    public function retrieve(array $params = [])
    {
        return $this->get('/realm/filters', $params);
    }
}