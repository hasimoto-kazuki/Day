<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

use Image;

use Storage;

class UsersController extends Controller
{
    //
    
    
    
    
    public function update(Request $request, $id)
    {
         $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            
        ]);
        
        
        $file = $request->file('image');
        //$fileName = time()."icon.jpg";
        
        //$image = Image::make($file);
        
        //$image->resize(300,null,function($constraint){
        //  $constraint->aspectRatio();
        //});
        
        $file_path= 'images';//.$fileName;
        //$image->save(public_path().$file_path);
        
        $path = Storage::disk('s3')->putFile($file_path, $file, 'public');
        
        $user = User::findOrFail($id);
        $user->name = $request->name; 
        $user->image = $path;
        
        
        $user->save();

        
        return redirect('/');
    }
}
