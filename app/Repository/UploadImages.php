<?php
namespace App\Repository;

class Upload {
	 public function handle(Request $request, $parentDir){
        foreach($request->images as $image){
            $fileName = $image->store('storage/images/{$parentDir}');
            Image::create([
                'imageable_id' => $request->id,
                'name' => $fileName,
                'imageable_type' => $parentDir
            ]);
        }
    }
}