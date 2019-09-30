<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use File;
use Storage;
use Image;
class PostController extends Controller
{
    public function submitPost(Request $request)
    {
        $data = $request->except('_token');
        //dd($request);
        //dd($data);
        //validation codes
        $rules = [
            'title' => 'required|string',
            'description'=>'required|string',
            'status' => 'required|string|in:active,inactive',
            'image' => 'sometimes|image|max:2000',
        ];
        $request->validate($rules); //to validate $rules ma ayeko data if data validate vayena vane form mai redirect gardinxa
        // dd($request->image);

            //dd($path);


 // if($request->image){
 //           $path=public_path().'/uploads';
 //           //dd($path);
 //           if(!File::exists($path)){
 //               File::makeDirectory($path,0777,true,true);
 //           }
 //           // $file_name="Image-".date('Ymdhis').rand(0,1234).".".$request->image->getClientOriginalName();
 //           // $file=random_str(100);
 //           // $extension=getClientOriginalExtension();
 //          $file_name="Image-".date('Ymdhis').rand(0,1234).".".$request->image->getClientOriginalExtension();
 //           //dd($file_name);
 //           $success=$request->image->move($path,$file_name);
 //           $data['image'] =$file_name;
 //       }
        // dd($data);
 $image = $request->file('image');
        $input['imagename'] =  "Image-".date('Ymdhis').rand(0,1234).".".$request->image->getClientOriginalName();;
      $path=public_path().'/thumbnail';
 //           //dd($path);
           if(!File::exists($path)){
               File::makeDirectory($path,0777,true,true);
           }
        $destinationPath = public_path().'/thumbnail';
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

         $path=public_path().'/imgupload';
         if(!File::exists($path)){
               File::makeDirectory($path,0777,true,true);
           }
        $destinationPath = public_path().'/imgupload';
        $img = Image::make($image->getRealPath());
        $img->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
   
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
   
        // $this->postImage->add($input);
      
       
     

//          if ($request->hasfile('files')) {
//             $file = $request->file('files');
//             // dd($file);
//              $imageName =  "Image-" . date('Ymdhis') . rand(0, 99) . "." . $file->getClientOriginalName();
//             // $extension = $file->getClientOriginalExtension(); // getting image extension
//             // $filename = time() . '.' . $extension;
//             $file->move('uploads/appsetting/', $imageName);

// //see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
// //a folder->upload and appsetting, and it wil store the images in your file.

//             $data->files = $imageName;
//         } else {
//             return $request;
//             $data->image = '';
//         }
        // dd($data);
        $post = new Post();
        $data['image']=$input['imagename'];
        $post->fill($data);
        $post->save($data);
        return redirect()->route('postlist');
    }
    public function postlist(Request $request)
    {
        $post = new Post();
        $post = $post->getAllPost();
        // dd($post);

        return view('postlist')->with('post_data', $post);
    }
    public function edit($id)
    {

        $post = Post::find($id);
        //dd($id);
        //dd($post);
        return view('editpost')->with('post_data', $post);
    }
    public function update(Request $request)
    {
        // dd($request->id);
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->save();
        return redirect()->route('postlist');
    }

    public function delete($id)
    {
        //dd($id);
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('postlist');
    }
    public function read(Post $post)
    {
        // $post = Post::find($id);

        //dd($id);
        //$post->get('description');
        return view('post-read')->with('post_data', $post);
    }
    public function getsubcategory(Request $request){
        dd($request);
    }
}
