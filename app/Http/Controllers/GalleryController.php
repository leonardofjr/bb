<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Portfolio;
use Storage;

class GalleryController extends Controller
{

    function create(Request $request) {
        if ($request->hasFile('image')) {
            $destination = 'assets/uploads';
            $file = $request->file('image')->store('public');
      
            $currentTime = new Carbon();  
            
            $data = [
                'description' => $request->input('description'),
                'basename' => basename($file),
                'tags' => $request->input('tags'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ];

            DB::table('portfolio')->insert($data);
            return response()->json([
                'status' => 'success',
            ]);
        }

        else {
            return response("nothing");
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
