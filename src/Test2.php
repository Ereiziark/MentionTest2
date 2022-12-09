<?php

namespace Qsl\Mentiontest2;

require_once "../vendor/autoload.php";

$cacheMem = new Cache(new CacheMem());
$cacheFile = new Cache(new CacheFile());

$cacheFile->set("key", "value");
$cacheFile->set("truc", "machin");
$cacheFile->set("bidule", "chouette");
$windowsFile = $cacheFile->set("C:\Windows\\", "je suis un chemin");
$keyFile = $cacheFile->get("key");
$trucFile = $cacheFile->get("truc");
$biduleFile = $cacheFile->get("bidule");
$cacheFile->get("C:\Windows\\");