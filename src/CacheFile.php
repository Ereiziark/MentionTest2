<?php

namespace Qsl\Mentiontest2;

use Mention\Kebab\File\FileUtils;
use Mention\Kebab\File\Exception\FileUtilsOpenException;


class CacheFile implements CacheInterface
{
    private string $baseDir;

    public function __construct()
    {
        $this->baseDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR;
    }

	public function get(string $key): mixed
	{
        $keyHash = md5($key);

        try 
        {
			$fileContentString = FileUtils::read($this->baseDir . $keyHash);
            $fileContent = json_decode($fileContentString, true);

			$isExpired = $fileContent["time"] + $fileContent["expireIn"] > time();

			if ($isExpired)
			{
				unlink($keyHash);
				return NULL;
			}

			return $fileContent["value"];

        } catch(Exception $ex)
        {
            return NULL;
        }
    }

    public function set(string $key, mixed $value, int $expireIn = 5): void
	{
        $keyHash = md5($key);

		$contentToSave = [
			"value" => $value,
			"expireIn" => $expireIn,
			"time" => time()
		];

        file_put_contents($this->baseDir . $keyHash . ".test", json_encode($contentToSave));
    }
}