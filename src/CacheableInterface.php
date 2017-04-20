<?php

namespace Resilient\Design;

interface CacheableInterface
{
    public function setCachePool (CacheItemPoolInterface $cachepool);

}