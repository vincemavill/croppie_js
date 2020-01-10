<?php

namespace App\Http\Controllers;

use App\Multiple;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
// use Intervention\Image\Facades\Image as Image;
use Storage;
use Validator;


class MultipleController extends Controller
{

    public function index()
    {
        return view('multiple');
    }

    public function create(Request $request)
    {
        //
        
         $prod_image = $request->file('test_image');

      
            $userid = uniqid();

            $img_name = $userid.".".$prod_image->getClientOriginalExtension();

            $img = Image::make($prod_image->getRealPath())->encode('jpg');
            
            $width = 300;
            $height = 300;

            if ($img->width() > $width) { 
                $img->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }elseif ($img->height() > $height) {
                $img->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
            } else {
                $img->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
            }

            $img->resizeCanvas($width, $height, 'center', false, '#fff');

            $img->stream(); 

            $yes = Storage::disk('public')->put("thumbnail/".$img_name, $img, 'public');

            if($yes){
                echo "yes!";
            } else {
                echo "no!";
            }

    }

    public function store(Request $request)
    {


        

        
        $prod_image = $request->file('file');

        foreach ($prod_image as $row_img) {

            $userid = uniqid();

            $img_name = $userid.".".$row_img->getClientOriginalExtension();

  
            $img = Image::make($row_img->getRealPath())->encode('jpg');

            $width = 1000;
            $height = 1000;

            if ($img->width() > $width) { 
                $img->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }elseif ($img->height() > $height) {
                $img->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
            } else {
                $img->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
            }

            $img->resizeCanvas($width, $height, 'center', false, '#fff');

            $img->stream(); 

            Storage::disk('public')->put("/".$img_name, $img, 'public');

        }

    }

    public function show(Multiple $multiple)
    {
        //
    }

    public function edit(Multiple $multiple)
    {
        //
    }

    public function update(Request $request, Multiple $multiple)
    {
        //
    }

    public function destroy(Multiple $multiple)
    {
        //
    }
}
