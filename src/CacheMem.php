<?php
namespace Qsl\Mentiontest2;

class CacheMem implements CacheInterface
{
/**
 * @var array{key: string, value: mixed} $cache
 * $cache is static if we need to access it later with an other instance of CacheMem
 */
	private static array $cache;

	public function get(string $key): mixed
	 {
		if (!array_key_exists($key, self::$cache)) 
		{
			return NULL;
		}

		return self::$cache[$key];
	}
	
	public function set(string $key, mixed $value): void
	{
		self::$cache[$key] = $value;
	}
}