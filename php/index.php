<?php declare(strict_types=1);

// require_once __DIR__ . '/vendor/autoload.php';

class Cache
{
    private static array $cache = [];

    public static function set(string $key, $value): void
    {
        self::$cache[$key] = $value;
    }

    public static function get(string $key)
    {
        return self::$cache[$key] ?? null;
    }
}

Cache::set('key1', 'value1');
Cache::set('key2', 'value2');
Cache::set('key3', 'value3');

var_dump(Cache::get('key1'));
var_dump(Cache::get('key2'));
var_dump(Cache::get('key3'));
var_dump(Cache::get('unknown'));
