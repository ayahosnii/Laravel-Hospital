<?php

namespace App\traits;
Trait DoctorTrait
{
    protected function doctorPhoto($photo,$folder)
    {
        //Save photo in folder
        $photo_extension = $photo ->getClientOriginalExtension();
        $photo_name = time().'.'.$photo_extension;
        $path = $folder;
        $photo-> move($path, $photo_name);

        return $photo_name;
    }


}
