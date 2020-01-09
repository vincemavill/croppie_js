<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
use Storage;
use Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        

                $img_data = $request->input('the_image');


                $image = str_replace('data:image/png;base64,', '', $img_data);
                $image = str_replace(' ', '+', $image);

                $imageName = uniqid().".png";

                $nice_image = Storage::disk('public')->put("/".$imageName, base64_decode($image), 'public');


                if($nice_image){
                        echo "haha! duuuuude";
                } else {
                    echo "sad";
                }

                // $userid =   uniqid();


                // $img_name = $userid.".".$row_img->getClientOriginalExtension();
        

                // $img = Image::make($request->file('picture'))->encode('jpg');

                // $width = 300;
                // $height = 300;

                // if ($img->width() > $width) { 
                //     $img->resize($width, null, function ($constraint) {
                //         $constraint->aspectRatio();
                //     });
                // }elseif ($img->height() > $height) {
                //     $img->resize(null, $height, function ($constraint) {
                //         $constraint->aspectRatio();
                //     }); 
                // } else {
                //     $img->resize($width, $height, function ($constraint) {
                //         $constraint->aspectRatio();
                //     }); 
                // }
    
                // $img->resizeCanvas($width, $height, 'center', false, '#ffffff');
    
                // $img->stream(); 

                // $exact_name = "profileMO";






    
                // $nice_image = Storage::disk('public')->put("/".$img_name, $img, 'public');

                // if($nice_image){
                //         echo "haha! duuuuude";
                // } else {
                //     echo "sad";
                // }
    }

    public function show(Home $home)
    {
        //
    }

  public function edit(Request $request)
    {
        

                $img_data = $request->input('upload_demo');


                $image = str_replace('data:image/png;base64,', '', $img_data);
                $image = str_replace(' ', '+', $image);

                $imageName = uniqid().".png";

                $nice_image = Storage::disk('public')->put("/".$imageName, base64_decode($image), 'public');


                if($nice_image){
                        echo "haha! duuuuude";
                } else {
                    echo "sad";
                }



                //  $userid = uniqid();

                // $img_name = $userid.".png";
        
                // $img = $image;
    
                // $nice_image = Storage::disk('public')->put("/".$img_name, $img, 'public');

                // if($nice_image){
                //         echo "haha! duuuuude";
                // } else {
                //     echo "sad";
                // }















                // $userid = uniqid();

                // $img_name = $userid.".".$row_img->getClientOriginalExtension();
        
                // $img = Image::make($request->file('upload_demo'))->encode('jpg');
    
                // $nice_image = Storage::disk('public')->put("/".$img_name, $img, 'public');

                // if($nice_image){
                //         echo "haha! duuuuude";
                // } else {
                //     echo "sad";
                // }
    }


    public function update(Request $request, Home $home)
    {
        //
    }

    public function destroy(Home $home)
    {
        //
    }
}
