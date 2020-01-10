<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <style>
        html {
            height: 100%;
        }
        body {
            height: 100%;
        }
    </style>

        <link rel="stylesheet" href="css/dropzone.css">

            <script src="js/dropzone.js"></script>
 


  </head>
  <body class="">
    <div class="container h-100 bg-light">

    <div class="row py-5">
        <div class="col-lg-6">

<!-- <form action="/upload_multiple" class="dropzone">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form> -->
<!-- 
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
</form> -->

                    <form action="/upload_multiple"  class="dropzone"  id="image_form">

                        @csrf

                    </form>

                    <button type="button" class="btn btn-primary my-5 float-right px-5" onclick="form_images()">Upload</button>
                    

        </div>
        <div class="col-lg-6">


                   


        </div>
    </div>

<p class="py-5"></p>

<div class="row py-5">
    <div class="col-lg-6">
        <form action="/test_image"  method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="test_image" name="test_image">
                <button type="submit" class="btn btn-secondary">Secondary</button>
            </div>
        </form>
    </div>
    <div class="col-lg-6">
    </div>
</div>






    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <script>


    Dropzone.autoDiscover = false;


    var Dropzone_form = new Dropzone(".dropzone", { 
        autoProcessQueue: false,
        addRemoveLinks: true,
        headers:{ "My-Awesome-Header": "header value" },
        dictRemoveFile: "Remove",
        acceptedFiles: ".png,.jpg,.jpeg",
        maxFiles: 6,
        maxFilesize:15,
        parallelUploads: 6,
        uploadMultiple: true,
        init: function(){

        },
        sending: function(file, response,formdata) {
           
    

            // dropzone.autoProcessQueue = true;
        },
        success: function(file, result) {
                console.log(result);
        }
    });

    function form_images(){
        if (Dropzone_form.getQueuedFiles().length > 0) {          
            Dropzone_form.processQueue();
        }
    }





    </script>


  </body>
</html>