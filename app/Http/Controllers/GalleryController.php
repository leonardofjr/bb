<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
use DB;
use App\Http\Requests\GalleryUploadValidationRequest;
use App\Portfolio;
use Storage;

class GalleryController extends Controller
{

    function create(GalleryUploadValidationRequest $request) {
        // Checking if request contains a file
        if ($request->hasFile('image') && $request->input('description') && $request->input('tags')) {
           // Storing File into variable and storing file in the the storage public folder
            $file = $request->file('image')->store('public');
            // Storing Current Time 
            $currentTime = new Carbon();  
            // Processing data to insert into database
            $data = [
                'description' => $request->input('description'),
                'basename' => basename($file),
                'tags' => $request->input('tags'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ];
            // Inserting data into database
            DB::table('portfolio')->insert($data);
            // Returning response;
            return response()->json();
        }

        else {
            return response();
        }
    }
    function read() {
            return DB::table('portfolio')->get();
    }
    function delete($id) {
        // Getting Selection By ID
        $portfolio = Portfolio::where('id', $id)->get();
        // Storing Filename in variable
        $filename = $portfolio[0]->basename;
        // Deleteing File
        Storage::delete('public/' . $filename);
        // Removing Selection From Database
        Portfolio::where('id', $id)->delete();
        return response('working');
    }
}
