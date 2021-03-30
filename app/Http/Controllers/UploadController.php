<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Person;
use App\Mail\WelcomeMail;

class UploadController extends Controller
{
    //

    function index(Request $req){
        // $this->validate($req, [
        //     'name'=>'required',
        //     'image'=>'required'
        // ]);

        $allowedFileExtensions = ['png','jpg'];
        $file = $req->file('file');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $check = in_array($extension, $allowedFileExtensions);

        if($check) {
            Person::create([
                'name' => $req->name,
                'surname' => $req->surname,
                'email' => $req->email,
                'image' => $req->file
            ]);
            $file->store('files');
            $obj = new \stdClass();
            $obj->name = $req->name;
            Mail::to($req->email)->send(new WelcomeMail($obj));
            return 'successfully added';
        }
        return 'failed to upload';
    }
}
