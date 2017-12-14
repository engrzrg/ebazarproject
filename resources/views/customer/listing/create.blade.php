@extends('bazar_layout.master')
@section('css')
    <link rel="stylesheet" href="{{asset('bazar/css/create-listing.css')}}">

@stop
@section('body')
    <form  id="createAddForm" action="">

    <div class="row ">
<div >
<table class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 create-table">
    <tr >
        <th ><label  for="">Title</label></th>
    <td>
        <div class="form-group">

            <input type="text" class="form-control" id="addName" name="addname" maxlength="45">
            <span class="error-color input1 "></span>
            <span class="countTitle "></span>
        </div>
    </td>
    </tr>

    <tr >
        <th ><label  for="">Category</label></th>
    <td>
        <div class="form-group">
            <select id="category" class="form-control">
                <option value="">Please select category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
    </td>
    </tr>

    <tr>
        <th> <label for="">Describe what you offer</label></th>
    <td>

        <div class="form-group">

            <textarea class="form-control" id="addDescription" maxlength="1000"></textarea>
            <span class="error-color input3 "></span>
            <span class="countDec  "></span>

        </div>
    </td>
    </tr>

    <tr>
        <th>   <label for="">Price</label></th>
    <td>


        <div class="form-group">

            <input type="text" class="form-control" id="price">

            <span class="error-color input2"></span>

        </div>
    </td>
    </tr>

    <tr>
        <th>    <label for="inputPassword">Take photo <i class="fa fa-camera" aria-hidden="true"></i></label></th>
    <td>



        <div class="form-group">


            <input type="file" name="files[]" multiple class="form-control" id="files">
            <span class="error-color input4"></span>


        </div>
    </td>
    </tr>
    <tr>

        <td colspan="2"> <output id="list"></output></td>
    </tr>

            <!--  <div class="checkbox">
                 <label><input type="checkbox"> Remember me</label>
             </div> -->
</table>

</div>
    </div>

@include('customer.listing.partials.form-process')

        {{--<hr class=" col-sm-4 col-md-offset-3 form-process-hr">--}}
    </form>


@stop
{{csrf_field()}}
@section('js')
    <script type="text/javascript">
        $( document ).ready(function() {
            //counter
            $('.countDec').text("1000 characters are left");

            $('.countTitle').text("45 characters are left");
        });
        //Description counter
        function DescriptionCounter(countDescription){
            if(countDescription < 6)
            {
                $('.countDec').addClass('error-color');
            }
            if(countDescription > 6)
            {
                $('.countDec').removeClass('error-color');
            }
        }
        $(document).on('keyup','#addDescription',function(){
            var countDescription = 1000 - $("#addDescription").val().length;
            DescriptionCounter(countDescription);
            $('.countDec').text(countDescription + "characters are left");
        });
        //Ad title counter
        function adTitleCounter(countAdTitle){
            if(countAdTitle < 6)
            {
                $('.countTitle').addClass('error-color');
            }
            if(countAdTitle > 6)
            {
                $('.countTitle').removeClass('error-color');
            }
        }
        $(document).on('keyup','#addName',function(){
            var countAdTitle = 45 - $("#addName").val().length;
            adTitleCounter(countAdTitle);
            $('.countTitle').text(countAdTitle + "characters are left");

        });
        //validation one by one
        $(document).on('focusout','#addName',function(){
            var addName = $("#addName").val();
            if(addName == ""){
                $('.input1').text('Without a title, an ad can not be done.');
                $('#addName').addClass('b-color');
            }
            if(addName != ""){
                $('.input1').text('');
                $('#addName').removeClass('b-color');
            }
        });
        $(document).on('focusout','#price',function(){
            var price = $("#price").val();
            if(price == ""){
                $('.input2').text('Price is mandatory.');
                $('#price').addClass('b-color');
            }
            if(price != ""){
                $('.input2').text('');
                $('#price').removeClass('b-color');
            }
        });
        $(document).on('focusout','#addDescription',function(){
            var description = $("#addDescription").val();
            if(description == ""){
                $('.input3').text('Without text, the ad can not be done.');
                $('#addDescription').addClass('b-color');
            }
            if(description != ""){
                $('.input3').text('');
                $('#addDescription').removeClass('b-color');
            }
        });
        //final validation on button click
        $(document).on('click','#btn-step1',function(){
            validate();
        });
        function validate(){
            var addName = $("#addName").val();
            var price = $("#price").val();
            var description = $("#addDescription").val();
            var files = $("#files").val();
            if(addName == "" || price == "" || description == "" || files == "")
            {
                event.preventDefault();

                if(addName == ""){
                    $('.input1').text('Without a title, an ad can not be done.');
                    $('#addName').addClass('b-color');
                }
                if(addName != ""){
                    $('.input1').text('');
                    $('#addName').removeClass('b-color');
                }
                if(price == ""){
                    $('.input2').text('Price is mandatory.');
                    $('#price').addClass('b-color');
                }
                if(price != ""){
                    $('.input2').text('');
                    $('#price').removeClass('b-color');
                }
                if(description == ""){
                    $('.input3').text('Without text, the ad can not be done.');
                    $('#addDescription').addClass('b-color');
                }
                if(description != ""){
                    $('.input3').text('');
                    $('#addDescription').removeClass('b-color');
                }
                if(files == ""){
                    $('.input4').text('Required');
                    $('#files').addClass('b-color');
                }
                if(files != ""){
                    $('.input4').text('');
                    $('#files').removeClass('b-color');

                }
            }
            else{

                $("#createAddForm").submit();

            }

        }
        //number only function
        $('#price').keyup(function (event) {
            // skip for arrow keys
            if (event.which >= 37 && event.which <= 40) return;
            // format number
            $(this).val(function (index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    ;
            });
        });
        //upload multiple pictures
        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object
            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {

                // Only process image files.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                    return function(e) {
                        // Render thumbnail.
                        var span = document.createElement('span');
                        span.className = "img-span";
                        span.className="col-md-5 col-sm-6 col-xs-6 selected-images"
                        span.innerHTML = ['<img id="getImg" class="thumbnail img-responsive" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
                        document.getElementById('list').insertBefore(span, null);
                        $(document).on('click','	#del-img',function(){
                            var srcVal = $('getImg').attr(src);
                            alert(srcVal)
                        });

                    };

                })(f);

                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        document.getElementById('files').addEventListener('change', handleFileSelect, false);

//categories
$(document).on('change','#category',function(){
    var category_id = $(this).val();
    var url = 'cat'
     $.post(url,{'category_id':category_id,'_token':$('input[name=_token]').val()},function(data){
            console.log(data);
        }) ;
    });
    // console.log(data);
    // //  $('.getdata').html(JSON.parse(data))
    //     // alert(get.count);
    //      // doWork();
    // });
    </script>
@endsection