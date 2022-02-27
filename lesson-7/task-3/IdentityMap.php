<?php

class IdentityMap
{
    private array $identityMap = [];
    private static $instance;

    public function add($obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->getId());

        $this->identityMap[$key] = $obj;
    }

    public function get(string $classname, int $id)
    {
        $key = $this->getGlobalKey($classname, $id);

        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }

        return false;
    }

    public function getGlobalKey(string $classname, int $id): string
    {
        return sprintf('%s.%d', $classname, $id);
    }

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    public function getIdentityMap()
    {
        return $this->identityMap;
    }
}