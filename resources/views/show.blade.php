@extends('bazar_layout.master')

@section('css')

    <link rel="stylesheet" href="{{asset('bazar/css/product_show.css')}}">

@stop

@section('body')

    <div class="row">

    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 product-show-panel">
        <div class="panel-inner-body">
            <img src="https://img.sbazar.cz/big/201710/2514/d3/59f0a507d30d264e70f50000.jpg" class="img img-responsive" alt="">
            <h3><strong>Product title &nbsp;&nbsp; $23,00  </strong> <span style="float: right;font-size: 18px">25 Ad Views</span></h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet ut lacus eget consequat. Donec rutrum quis lectus non posuere. Duis nec dui mattis, molestie odio vel, vehicula elit. Ut placerat quam mollis tincidunt sagittis. Nam quis ullamcorper libero, luctus eleifend massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim ac dolor ut molestie. Sed laoreet risus dui, at convallis velit laoreet eu. Phasellus ut dictum mi, et tempor leo. Maecenas pulvinar nunc felis, eget varius dolor sagittis in. Ut vel auctor quam.</p>
            <p><strong>UserName</strong></p>
            <p><span class="text-danger">Dated:</span>  12-10-2017</p>

            <a href="#cities" data-toggle="collapse" class="btn btn-info"><span class="fa fa-envelope"></span> &nbsp; Send Message </a>

            <div class="row collapse show-message-panel" id="cities">
                <div class="form-group col-md-8">
                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type Your Message"></textarea>

                </div>

                    <input type="submit" class="btn btn-success" value="Send">

            </div>
            <img src="http://img.michaels.com/L6/3/IOGLO/873480049/212543230/10093625_r.jpg?fit=inside|1024:1024" class="img img-responsive" alt="">
            <img src="http://assets.myntassets.com/assets/images/1919140/2017/6/2/11496384653653-SayItLoud-Men-Black-Solid-Round-Neck-T-shirt-5241496384653549-4.jpg" class="img img-responsive" alt="">
            {{--<img src="https://britwear.co.uk/magento/media/catalog/product/j/1/j165m_greenmarl_ft.jpg" class="img img-responsive" alt="">--}}
        </div>

    </div>

       </div>

@include('bazar_layout.partials.products')

@endsection