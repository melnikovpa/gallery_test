<?php

namespace AppBundle\DataFixtures\Faker\Provider;

use Faker\Provider\Base as BaseProvider;

class ImageFileProvider extends BaseProvider
{
    private static $path = "art-fixtures";
    private static $folders = ['flowers', 'scenery', 'zoo'];

    /**
     * Load random file from directory
     * @return string
     */
    public static function randomPhoto()
    {
        $folder = self::randomElement(self::$folders);

        chdir(ROOT . '/../web/uploads/' . self::$path . '/' . $folder);
        $files = glob('*.jpg', GLOB_BRACE);
        return (string) self::randomElement($files);
    }

}