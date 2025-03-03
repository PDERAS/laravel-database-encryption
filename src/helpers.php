<?php
/**
 * src/helpers.php.
 *
 * @author      Austin Heap <me@austinheap.com>
 * @version     v0.3.0
 */
declare(strict_types=1);

if (! function_exists('database_encryption')) {
    /**
     * @return \Pderas\Database\Encryption\EncryptionHelper
     */
    function database_encryption(): \Pderas\Database\Encryption\EncryptionHelper
    {
        return \Pderas\Database\Encryption\EncryptionFacade::getInstance();
    }
}

if (! function_exists('db_encryption')) {
    /**
     * @return \Pderas\Database\Encryption\EncryptionHelper
     */
    function db_encryption(): \Pderas\Database\Encryption\EncryptionHelper
    {
        return database_encryption();
    }
}

if (! function_exists('dbencryption')) {
    /**
     * @return \Pderas\Database\Encryption\EncryptionHelper
     */
    function dbencryption(): \Pderas\Database\Encryption\EncryptionHelper
    {
        return database_encryption();
    }
}

if (! function_exists('database_encrypt')) {
    /**
     * @return null|string
     */
    function database_encrypt(?string $value = null): ?string
    {
        return __FUNCTION__.': FUNCTION-NOT-IMPLEMENTED';
    }
}

if (! function_exists('db_encrypt')) {
    /**
     * @return null|string
     */
    function db_encrypt(?string $value = null): ?string
    {
        return database_encrypt($value);
    }
}

if (! function_exists('dbencrypt')) {
    /**
     * @return null|string
     */
    function dbencrypt(?string $value = null): ?string
    {
        return database_encrypt($value);
    }
}

if (! function_exists('database_decrypt')) {
    /**
     * @return null|string
     */
    function database_decrypt(string $value): ?string
    {
        return __FUNCTION__.': FUNCTION-NOT-IMPLEMENTED';
    }
}

if (! function_exists('db_decrypt')) {
    /**
     * @return null|string
     */
    function db_decrypt(string $value): ?string
    {
        return database_decrypt($value);
    }
}

if (! function_exists('dbdecrypt')) {
    /**
     * @return null|string
     */
    function dbdecrypt(string $value): ?string
    {
        return database_decrypt($value);
    }
}

if (! function_exists('str_random')) {

    /**
     * @param int $value
     * @return string|null
     */
    function str_random(int $value = 16): ?string
    {
        return \Illuminate\Support\Str::random($value);
    }
}
