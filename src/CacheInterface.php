<?php

namespace Qsl\Mentiontest2;

interface CacheInterface
{
    public function get(string $key);
    public function set(string $key, mixed $value);
}