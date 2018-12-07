<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Http\Requests\GalleryUploadValidationRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use DB;
use Carbon\Carbon;

class adminGalleryController extends Controller
{       
        public function getGalleryTable() {
            return DB::table('gallery_uploads')->get();
        }
        public function getGalleryById($id) {
            return DB::table('gallery_uploads')->where('id', $id)->get();
        }

        public function getGalleryPage() {
            $data = $this->getGalleryTable();
            return view('admin.gallery')->withData($data);;
        }

         public function getGalleryUploadPage() {
            return view('admin.upload');
        }
         public function getGalleryEditPage($id) {
            $data = DB::table('gallery_uploads')->where('id', $id)->get();
           
            return view('admin.edit')->withData($data);
        }

        public function deleteItemFromGalleryTable($id, Request $request) { 
           $file = DB::table('gallery_uploads')->where('id',$id)->get();
           $fileName = $file[0]->basename;
           $fileDirectory = 'assets/uploads/'; 
           
           if (file_exists($fileDirectory . $fileName)) {
                unlink($fileDirectory . $fileName);
                DB::table('gallery_uploads')->where('id',$id)->delete();
                return redirect('/admin/user-panel/gallery');
           }

           
        }
        public function postUploadDataToGalleryTable(GalleryUploadValidationRequest $request) {

            $destination = 'assets/uploads';

            $file = $request->file('gallery-file');
            $fileinfo = pathinfo($file->getClientOriginalName());
            $file->move($destination , $fileinfo['basename']);
            $currentTime = new Carbon();  
            
            $data = [
                'description' => $request->input('gallery-filename-alternate-text'),
                'category' => $request->input('gallery-categories'),
                'overlay' => $request->input('gallery-overlay-checkbox'),
                'basename' => $fileinfo['basename'],
                'filename' => $fileinfo['filename'],
                'ext' => $fileinfo['extension'],
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ];
            DB::table('gallery_uploads')->insert($data);

           return response()->json([
               'status' => 'success',
           ]);
        
        }
}
