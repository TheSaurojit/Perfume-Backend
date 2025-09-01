<?php
namespace App\Helpers;


use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;


class FileUploader
{
    /**
     * @param UploadedFile $file The uploaded file instance.
     * @return string The file path if successful.
     */
   public static function upload(UploadedFile $file, string $path = 'images', bool $threeD = false)
{
    $storagePath = "uploads/$path"; // Always store under 'uploads'
    $fileName = Str::uuid() . "-" . $file->getClientOriginalName();

    $file->move(public_path($storagePath), $fileName);

    // Return URL: remove "uploads/" from return string if $threeD is true
    if ($threeD) {
        return url("/$path/$fileName"); // e.g. /three_d_files/xyz.glb
    }

    return url("/$storagePath/$fileName"); // e.g. /uploads/images/xyz.jpg
}

}
