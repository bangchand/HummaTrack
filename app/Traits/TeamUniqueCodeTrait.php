<?php

namespace App\Traits;

trait TeamUniqueCodeTrait
{
    public function generateUniqueCode()
    {
        $length = rand(40, 50);
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
