<?php

namespace App\Http\Unsplash;

use Crew\Unsplash\Photo;
use PayBreak\Foundation\AbstractEntity;

/**
 * Unsplash Image
 *
 * @author EB
 * @method setId($id)
 * @method string getId()
 * @method setImageFull($imageFull)
 * @method string getImageFull()
 * @method setImageRegular($imageRegular)
 * @method string getImageRegular()
 * @method setUserName($userName)
 * @method string getUserName()
 * @method setUserUrl($userUrl)
 * @method string getUserUrl()
 * @method setUserImage($userImage)
 * @method string getUserImage()
 * @package App\Http\Unsplash
 */
class UnsplashImage extends AbstractEntity
{
    protected $properties = [
        'id' => self::TYPE_STRING,
        'image_full' => self::TYPE_STRING,
        'image_regular' => self::TYPE_STRING,
        'user_name' => self::TYPE_STRING,
        'user_url' => self::TYPE_STRING,
        'user_image' => self::TYPE_STRING,
    ];

    /**
     * @author EB
     * @param Photo $photo
     * @return array
     */
    public static function getComponentsFromPhoto(Photo $photo)
    {
        return [
            'id' => $photo->id,
            'image_full' => $photo->urls['full'],
            'image_regular' => $photo->urls['regular'],
            'user_name' => $photo->user['username'],
            'user_url' => $photo->user['links']['html'],
            'user_image' => $photo->user['profile_image']['medium'],
        ];
    }
}