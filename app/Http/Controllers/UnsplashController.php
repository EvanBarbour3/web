<?php

namespace App\Http\Controllers;

use App\Http\Unsplash\UnsplashCredentials;
use App\Http\Unsplash\UnsplashImage;
use Crew\Unsplash\Exception;
use Crew\Unsplash\HttpClient;
use Crew\Unsplash\Photo;
use Illuminate\Support\Facades\Log;

class UnsplashController extends Controller
{
    const DEFAULT_IMAGE_URL = '/image/hero.jpg';

    /**
     * @author EB
     * @return \App\Http\Unsplash\UnsplashImage
     */
    public static function fetchRandomUnsplashImage()
    {
//        return self::getDefaultImageSet();
        HttpClient::init(self::getUnsplashCredentials()->toArray());

        try {
            return UnsplashImage::make(
                UnsplashImage::getComponentsFromPhoto(
                    Photo::random(['featured' => true, 'orientation' => 'landscape', 'query' => 'laptop'])
                )
            );
        } catch (Exception $e) {
            Log::error('Error fetching Unsplash Image: ' . $e->getMessage());
        }

        return self::getDefaultImageSet();
    }

    /**
     * @author EB
     * @return UnsplashCredentials
     */
    private static function getUnsplashCredentials()
    {
        return UnsplashCredentials::make([
            'application_id' => env('UNSPLASH_APP_ID'),
            'secret' => env('UNSPLASH_SECRET'),
            'callback_url' => env('UNSPLASH_CALLBACK_URL'),
        ]);
    }

    /**
     * @author EB
     * @return UnsplashImage
     */
    private static function getDefaultImageSet()
    {
        return UnsplashImage::make([
            'id' => '1232dwada',
            'image_full' => self::DEFAULT_IMAGE_URL,
            'image_regular' => self::DEFAULT_IMAGE_URL,
            'user_name' => 'Evan Barbour',
            'user_url' => 'https://evanbarbour.co.uk',
            'user_image' => '',
        ]);

//        return UnsplashImage::make([
//            'image_full' => self::DEFAULT_IMAGE_URL,
//            'image_regular' => self::DEFAULT_IMAGE_URL,
//        ]);
    }
}