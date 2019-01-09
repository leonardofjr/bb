<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
use DB;
use App\Http\Requests\GalleryUploadValidationRequest;
use Illuminate\Http\Request;
use App\Portfolio;
use App\Site;
use Storage;

class SiteController extends Controller
{

    function create(Request $request) {
        // Checking if request contains a file
        if (/*$request->hasFile('image') && */$request->input('email') && $request->input('phone') && $request->input('facebook-url') && $request->input('instagram-url')) {
           // Storing File into variable and storing file in the the storage public folder
            //$file = $request->file('image')->store('public');
            // Storing Current Time 
            $currentTime = new Carbon();  
            // Processing data to insert into database
            $data = [
                'email' => $request->input('email'),
             //   'basename' => basename($file),
                'phone' => $request->input('phone'),
                'facebook_url' => $request->input('facebook-url'),
                'instagram_url' => $request->input('instagram-url'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ];
            // Inserting data into database
            $site = new Site();
            $site->facebook_url = $request->input('facebook-url');
            $site->instagram_url = $request->input('instagram-url');
            $site->email = $request->input('email');
            $site->phone = $request->input('phone');
            $site->save();
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
