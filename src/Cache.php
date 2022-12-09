<?php
namespace Qsl\Mentiontest2;

class Cache {

    private CacheInterface $cache;

    function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    function get(string $key)
    {
        return $this->cache->get($key);
    }

    function set(string $key, mixed $value)
    {
        $this->cache->set($key, $value);
    }
}