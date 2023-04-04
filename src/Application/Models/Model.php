<?php

namespace Application\Models;

class Model
{

    private static $data = [
        'name' => 'Название компании',
        'logo' => 'Логотип',
        'yearOfFoundation' => 'XXXX',
        'contacts' => [
            '+XXX (XXX) XXX-XX-XX',
            'name@company-mail.com',
            'vk.com/vk.name'
        ],
        'years' => '10',
        'flights' => '1 000+',
        'aircrafts' => '10 000+',
        'support' => '24/7'
    ];

    private static function getData(): array
    {
        return self::$data;
    }

    public static function main(): array
    {
        $data = Model::getData();
        $result = [];
        foreach ($data as $key => $value)
        {
            if (!(in_array($key, ['name', 'logo', 'contacts']))) {
                continue;
            }
            $result[$key] = $value;
        }
        return $result;
    }

    public static function about(): array
    {
        $data = Model::getData();
        $result = [];
        foreach ($data as $key => $value)
        {
            if ($key === 'name') {
                continue;
            }
            $result[$key] = $value;
        }
        return $result;
    }

    public static function changeSize(): void
    {
        $image = imagecreatefromwebp(__DIR__ . '/../../../images/background.webp');

        $width = imagesx($image);
        $height = imagesy($image);

        $back = imagecreatetruecolor(1360, 640);

        $white = imagecolorallocate($back, 255, 255, 255);
        imagefill($back, 0, 0, $white);

        imagecopyresampled($back, $image, 0, 0, 0, 0, imagesx($back), imagesy($back), imagesx($image), imagesy($image));

        $path = __DIR__ . '/../../../images/background1360x640.webp';
        header('Content-Type:image/webp');
        imagewebp($back, $path, 100);

        imagedestroy($image);
        imagedestroy($back);
    }
}