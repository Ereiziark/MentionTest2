<?php

namespace Qsl\Mentiontest2;

require_once "../vendor/autoload.php";

$cacheMem = new Cache(new CacheMem());
$cacheFile = new Cache(new CacheFile());

// $cacheMem->set("C:\Windows\\", "machin");
// echo $windowsMem = $cacheMem->get("C:\Windows\\");


try {
    $cacheFile->set("key", "value");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}
try {
    $cacheFile->set("truc", "machin");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}
try {
    $cacheFile->set("bidule", "chouette");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}

try {
    $keyFile = $cacheFile->get("key");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}
try {
    $trucFile = $cacheFile->get("truc");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}
try {
    $biduleFile = $cacheFile->get("bidule");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}

try {
    $errorCacheFile = $cacheFile->get("efefeffe");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}


try {
    $windowsFile = $cacheFile->set("C:\Windows\\", "je suis un chemin");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}

try {
    $cacheFile->get("C:\Windows\\");
} catch (Exception $ex) {
    printf("Error while getting cache : ". $ex->getMessage());
}