@extends('bazar_layout.master')


@section('body')

    @include('bazar_layout.search_form')

@include('bazar_layout.partials.categories_list')


    <div class="row my-filter">
        <div class="col-md-4 col-sm-5 city-btn">

            <a href="#cities" data-toggle="collapse" class="btn">Choose City <span class="fa fa-arrow-down"></span></a>
            {{--<label>or enter tha pastcode</label>--}}
            {{--<input class="cat-input" type="text" name="postcode">--}}
        </div>
        <div class="col-md-3 prize-search">
           <label>Prize from</label>
           <input class="cat-input" type="text" name="pricefrom">
           <label>to</label>
           <input class="cat-input" type="text" name="prize to">
           <label>CZK</label>
        </div>

        {{--<div  class="col-md-2 dropdown city-btn" >--}}

                {{--<a style="float: right" class="btn dropdown-toggle" data-toggle="dropdown" href="#">Sort By--}}
                    {{--<span class="caret"></span></a>--}}

            {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">Page 1-1</a></li>--}}
                {{--<li><a href="#">Page 1-2</a></li>--}}
                {{--<li><a href="#">Page 1-3</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

    </div>

       <div class="row  collapse"   id="cities">

           <div class="col-md-3 col-md-offset-2">
                   <ul>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                   </ul>
           </div>
           <div class="col-md-3">
                   <ul>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                           <li><a href="#">city 1</a></li>
                   </ul>
           </div>

       </div>

@include('bazar_layout.partials.products')



@endsection