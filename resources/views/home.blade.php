<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/croppie.css" />

    <style>
        html {
            height: 100%;
        }
        body {
            height: 100%;
        }
    </style>

    <title>Hello, world!</title>
  </head>
  <body class="">
    <div class="container h-100 bg-light">

    <div class="row">
        <div class="col-lg-6">


            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control-file" id="picture_select" name="picture_select" accept="image/*">
            </div>

            <img id="img_elem_value" src="" alt="he" />

        </div>
        <div class="col-lg-6">


            <!-- <img id="image_2_crop" src="" /> -->
                     <div id="image_2_crop"></div>
                     

            <form action="/upload_image" id="upload_function" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control-file" id="the_image" name="the_image">

                <button type="button" class="btn btn-primary mx-auto d-block my-4" onclick="upload_img_function()">Uplaod and Save</button>
            </form>

                   


        </div>
    </div>

<p class="py-5"></p>





<!-- <div class="row h-100">
        <div class="col-lg-6">
            <form action="/upload_image_crop" method="POST" enctype="multipart/form-data">

                @csrf
                <button type="button" onclick="submit_function()" class="btn btn-primary">Put</button>
                <br>
                <input type="hidden" class="form-control-file" id="upload_demo" name="upload_demo">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

                <br><br><br>
                <img id="img_elem_id" src="" />
            
            </form> 
        </div>

        <div class="col-lg-6 h-100">
            <img id="my-image" src="" />
        </div>
</div> -->


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <script src="js/croppie.js"></script>





<script>



var el = document.getElementById('image_2_crop');

var vanilla = new Croppie(el, {
    enableExif: true,
    viewport: { width: 200, height: 200 },
    boundary: { width: 300, height: 300 },
    enableOrientation: true
});





$('#picture_select').on('change', function() {
 

    if (this.files && this.files[0]) {

        let reader = new FileReader();

        reader.onload = function(e) {
            console.log(e.target.result,)
            vanilla.bind({
                url: e.target.result,
            });

        }
    
        reader.readAsDataURL(this.files[0]);

    }

});






function upload_img_function(){


    vanilla.result('canvas','original').then(function (src) {

        $('#img_elem_value').attr('src', src);

        $('#the_image').attr('value', src);

    });

    setTimeout(function(){ 

        document.getElementById("upload_function").submit();

    }, 3000);
        
}



</script>


  </body>
</html>