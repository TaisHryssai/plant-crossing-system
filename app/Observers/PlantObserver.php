<?php

namespace App\Observers;

use App\Plant;
use Illuminate\Support\Str;
use File;

class PlantObserver
{
    /**
     * Handle the plant "creating" event.
     *
     * @param  \App\Plant  $plant
     * @return void
     */
    public function creating(Plant $plant)
    {
        $this->saveImage($plant);
    }

    /**
     * Handle the plant "updated" event.
     *
     * @param  \App\Plant  $plant
     * @return void
     */
    public function updated(Plant $plant)
    {
        if ($plant->isDirty('image')) {
            $this->deleteImageFile(Plant::find($plant->id));
            $this->saveImage($plant);
        }
    }

    /**
     * Handle the plant "deleted" event.
     *
     * @param  \App\Plant  $plant
     * @return void
     */
    public function deleted(Plant $plant)
    {
        $this->deleteImageFile($plant);
    }

    /**
     * Delete a image from file.
     *
     * @param  \App\Plant $plant
     * @return void
     */
    private function deleteImageFile($plant)
    {
        $imageDirectory = public_path('uploads/plant/' . $plant->id);
        $imagePath = $imageDirectory  . '/' . $plant->image;

        File::delete($imagePath);
        $files = glob($imageDirectory . '/*');
        if (is_array($files) && count($files) === 0) {
            File::deleteDirectory($imageDirectory);
        }
    }

    private function saveImage($plant)
    {
        if ($plant->image != null) {

            $imageName = Str::slug($plant->name, '-') . '.' . $plant->image->getClientOriginalExtension();
            $storePath = public_path('uploads/plant/' . $plant->id);

            $plant->image->move($storePath, $imageName);
            $plant->image = $imageName;
        }
    }
}
