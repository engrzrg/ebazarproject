@extends('bazar_layout.master')
@section('css')
    <link rel="stylesheet" href="{{asset('bazar/css/create-listing.css')}}">

@stop
@section('body')
<div class="container">
<div class="jumbotron">
    <h1 class="heading">Categories</h1> 
    {{csrf_field()}}
    <select id="category" class="form-control">
        <option  value="">Select Categories</option>
        @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->title}}</option>
         @endforeach
    </select>
    <select id="subCategory" class="form-control">
        <!-- <option  value="">Select Sub Category</option> -->
    </select>
  </div>
</div>
<div class="row" style="margin-top: 30px">
    <div class="col-md-5  col-md-offset-4 col-sm-offset-1 col-sm-10 col-xs-12 ">

        <div  class="col-md-3 col-sm-4 col-xs-4 form-process" style="opacity: 1">

            <p><strong>Category</strong></p>
            <div class="col-md-5 col-sm-3 col-xs-3 form-process-circle" >
                <p><strong> 1</strong></p>
            </div>

        </div>
        <div  class="col-md-3 col-sm-4 col-xs-4 form-process" >

            <p><strong> Category</strong></p>
            <div class="col-md-5  col-sm-3 col-xs-3  form-process-circle" >
                <p><strong> 2</strong></p>
            </div>

        </div>
        <div  class="col-md-3 col-sm-4 col-xs-4 form-process" >

            <p><strong> Basic Info</strong></p>
            <div class="col-md-5 col-sm-3 col-xs-3 form-process-circle" >
                <p><strong> 3</strong></p>
            </div>

        </div>

        <div class="col-md-2 col-sm-2 col-xs-2 btn-step1">
            <button type="submit" id="btn-step1" class="btn btn-primary">continue</button>
        </div>

    </div></div>

@stop

@section('js')
<script type="text/javascript">
 $(document).ready(function(){
 // $('.subCategory').display('none');
});
$(document).on('change','#category',function(data){
    var category = $(this).val();
    $.post('getCategory',{'category':category,'_token':$('input[name=_token]').val()},function(){
    console.log(data);
    //  $('.getdata').html(JSON.parse(data))
        // alert(get.count);
         // doWork();
    });
});
function doWork(gwet){
        for (var option in get)
     {  //    var options = option[data].id;
           
        $('#subCategory').append("<option value=\""+option[id]+"\">"+data[option].sub_title+"</option>");
    }
}
</script>
@endsection