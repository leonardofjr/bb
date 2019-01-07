<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests\ReviewValidationRequest;
use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller {
    function create(ReviewValidationRequest $request) {
        $review = new Review();
        // Checking if request contains a file
        if ($request->input('fname') && $request->input('lname') && $request->input('review')) {
            // Storing Current Time 
            $currentTime = new Carbon();  
            // Processing data to insert into database
            $review->fname = $request->input('fname');
            $review->lname = $request->input('lname');
            $review->review = $request->input('review');
            $review->confirmed = false;
            $review->created_at = $currentTime;
            $review->updated_at = $currentTime;
            // Saving To Database;
            $review->save();
     
            // Returning response;
            return response()->json();
        } else {
            return response();
        }
    }

    function readAll(Request $request) {
        $review = new Review();
        return $review->get();
    }

    function readById($id) {
        $review = Review::where('id', $id)->get();
        return response()->json($review);

    }


    function update($id, Request $request) {
        if ($request->input('fname') && $request->input('lname') && $request->input('review') ) {
            $review = Review::findOrFail($id);
                // Processing data to insert into database
            $review->fname = $request->input('fname');
            $review->lname = $request->input('lname');
            $review->review = $request->input('review');
            $review->confirmed = $request->input('confirmed');
            $review->save();
            // Returning response;
            return response()->json($review);
        } else {
            return response();
        }
    }

    function delete($id) {
        // Getting Selection By ID
        $review = Review::where('id', $id)->get();
        // Removing Selection From Database
        Review::where('id', $id)->delete();
        return response('working');
    }
}


