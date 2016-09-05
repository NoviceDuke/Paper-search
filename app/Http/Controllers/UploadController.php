<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;

class UploadController extends Controller
{
    //
    public function upload(Request $request){

          $files = $request->file('file');

      //If the array is not empty
      if ($files[0] != '') {
        foreach($files as $file) {
          // Set the destination path
          $destinationPath = 'uploads';
          // Get the orginal filname or create the filename of your choice
          $filename = $file->getClientOriginalName();
          // Copy the file in our upload folder
          $file->move($destinationPath, $filename);
        }
      }
      // Retrun a redirection or a view
      return redirect('/');
    }
}
