<?php
namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Helper
{

    /**
     * Image file upload 
     */
    public static  function uploadImage($file, $folder, $name): string
    {
        $imageName = Str::slug($name) . '.' . $file->extension();
        $file->move(public_path('uploads/' . $folder), $imageName);
        $path = 'uploads/' . $folder .'/'. $imageName;
        return $path;
    }



    /**
     * Deletes the specified image file if it exists.
     *
     * @param string $image The path to the image file to delete.
     * @return bool True if the file was successfully deleted, false otherwise.
     */
    // Delete Image
    function deleteImage($image)
    {
        if (isset($image) && file_exists($image)) {
            unlink($image);
            return true; // Successfully deleted the file
        }
        return false; // File doesn't exist or wasn't provided
    }

    // Make Slug
    function makeSlug($modal, $title): string
    {
        $slug = $modal::where('slug', Str::slug($title))->first();
        if ($slug) {
            $randomString = Str::random(5);
            $slug = Str::slug($title) . $randomString;
        } else {
            $slug = Str::slug($title);
        }
        return $slug;
    }

    // Generate unique slug
    function generateUniqueSlug($title, $table, $slugColumn = 'slug')
    {
        // Generate initial slug
        $slug = str::slug($title);

        // Check if the slug exists
        $count = DB::table($table)->where($slugColumn, 'LIKE', "$slug%")->count();

        // If it exists, append the count
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
