<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
use DB;
use App\Http\Requests\GalleryUploadValidationRequest;
use Illuminate\Http\Request;
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
    function readAll($limit = null , $offset = null) {
        if (!$limit && !$offset) {
            return DB::table('portfolio')->get();
        } 
        else {
            return DB::table('portfolio')->limit($limit)->offset($offset)->get();
        }
    }
    function readById($id) {
            $portfolio = Portfolio::findOrFail($id);
            return response()->json($portfolio);

    }

    function update($id, Request $request ) {
            $portfolio = Portfolio::where('id', $id)->get();
            $data = [];
            if ($request->hasFile('image' )&& $request->input('description') && $request->input('tags')) {
                // Storing new uploaded File
                $file = $request->file('image')->store('public');
                // Deleting Old File
                // Getting Selection By ID
                $portfolio = Portfolio::where('id', $id)->get();
                    // Storing Filename in variable
                $filename = $portfolio[0]->basename;
                    // Deleteing File
                Storage::delete('public/' . $filename);
               
                $data = [
                    'basename' => basename($file),
                    'description' => $request->input('description'),
                    'tags' => $request->input('tags')
                ];

                // Inserting data into database
                Portfolio::where('id', $id)->update($data);
                // Returning response;
                return response()->json($data);


            }

            elseif($request->input('description') && $request->input('tags')) {
                // Processing data to insert into database
                $data = [
                    'description' => $request->input('description'),
                    'tags' => $request->input('tags'),
                ];

                // Inserting data into database
                Portfolio::where('id', $id)->update($data);
                // Returning response;
                return response()->json($data);
            } else {
                return response();
            }
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
