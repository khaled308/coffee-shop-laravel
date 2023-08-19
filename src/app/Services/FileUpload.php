<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUpload
{
    public static function upload($file, $directory, $filename = null)
    {
        $filename = $filename ?: Str::random(20) . '.' . $file->getClientOriginalExtension();

        $path = Storage::disk('public')->putFileAs($directory, $file, $filename);

        return $path;
    }

    public static function delete($path)
    {
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
            return true;
        }

        return false;
    }
}