<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetails;

class UploadFileController extends Controller
{
    public function index(){
        return('file_upload');
    }
    public function uploadSubmit(Request $req){
        //dd($req);
        if($req->hasFile('document__file')){
            $allowedfileExtension=['pdf', 'jpg', 'png', 'JPG', 'docx', 'txt'];
            $file = $req->file('document__file');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            //dd($extension);
            if($check){
                $filename = $req->document__file->store('document__files');
                $item = new Item();
                $item->name = $req->input('document__title');
                $item->save();
                
                $itemDeteils = new ItemDetails();
                $itemDeteils->item_id = $item->id;
                $itemDeteils->filename = $filename;
                $itemDeteils->save();

                $file->move('document__files', $filename);
                //dd($itemDeteils);

            }
        }

        return redirect()->route('mailSend');
    }
}
