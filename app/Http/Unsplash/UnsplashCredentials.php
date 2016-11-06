<?php

namespace App\Http\Unsplash;

use PayBreak\Foundation\AbstractEntity;
use PayBreak\Foundation\Helpers\NameHelper;

/**
 * Unsplash Credentials
 *
 * @author EB
 * @package App\Http\Unsplash
 */
class UnsplashCredentials extends AbstractEntity
{
    protected $properties = [
        'application_id' => self::TYPE_STRING,
        'secret' => self::TYPE_STRING,
        'callback_url' => self::TYPE_STRING,
    ];

    /**
     * Return Unsplash Credentials as an array to be used with Crew\Unsplash\HttpClient::init()
     *
     * @author EB
     * @param bool $recursively
     * @return array
     */
    public function toArray($recursively = false)
    {
        $array = parent::toArray($recursively);

        $rtn = [];

        foreach ($array as $k => $v) {
            $rtn[self::getKeyFromSnakeToCamel($k)] = $v;
        }

        return $rtn;
    }

    /**
     * @author EB
     * @param string $key
     * @return string
     */
    private static function getKeyFromSnakeToCamel($key)
    {
        return lcfirst(NameHelper::snakeToCamel($key));
    }
}