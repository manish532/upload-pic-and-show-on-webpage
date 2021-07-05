<?php

namespace App\Http\Controllers;
use App\Models\formdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class storedata extends Controller
{
     
    public function store(Request $request){
        $data = $request->all();
        //$name = $request->name;
        $files = $request->file('file');
        $email = $request->email;
        $path = $email.'/images';
        $filename = $files->getClientOriginalName();
        $files->storeAs($path,$filename);
        $data['file'] = $path.'/'.$filename;

        $response = formdata::create($data);

        if($response){
            return back()->with("message","data inserted");
        }
        else{
            return back()->with("message","data error");
        }

    }
    
    public function fetchdata(){
        
        $data = formdata::all();
       
        if(count($data) != 0){

            return view("fordata",compact('data'));

        }
        else{
            return view("fordata",compact('msg','error')); 
        }
    }

    public function updateuser($id){
          
          $data = formdata::find($id);

          if($data){
           
            return view("edit",compact('data'));

          }else{
          
            return view("edit","data not found");

          }
       
    }
    
    public function updated(Request $request){
        $data = $request->all();
        $id = $request->id;
        $files = $request->file('file');
        $email = $request->email;
        $path = $email.'/images';
        $filename = $files->getClientOriginalName();
        $dpath = 'public/'.$path;
        $files->storeAs($dpath,$filename);
        $data['file'] = $path.'/'.$filename;
      
        $res = formData::where('id',$id)->update($data);
        if($res){
            return "data update successfully";
        }
        else{
            return "Opps somthig went wrong !";
        }
    }

    public function deleteuser($id){
        $res = formData::where('id',$id)->delete();
        if($res){
            return "success";
        }
        else{
            return "error";
        }
    }

}
