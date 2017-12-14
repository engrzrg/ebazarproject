@extends('bazar_layout.master')

@section('css')

    <link rel="stylesheet" href="{{asset('bazar/css/profile.css')}}">

@stop

@section('body')

    <div class="profile-header row">


        <h1><strong>My Ads</strong></h1>

        <div class="display-listing-filers ">

            <strong>Display:</strong>&nbsp;

            <a href="#" class="btn">All (0)</a> |

            <a href="#" class="btn">Active (0)</a> |

            <a href="#" class="btn">Pending (0)</a> |

            <a href="#" class="btn">Cancel (0)</a>

             </div>


    </div>

    <div class="row" style="margin-bottom: 100px">

        <div class="col-md-3 up-arrow hidden-xs hidden-sm">
            <img src="{{asset('bazar/images/up-arrow.png')}}" alt="">
        </div>
        <div class="col-md-6 hidden-xs hidden-sm  profile-header-2">
            <h2><strong> You have no ads </strong></h2>
            <p>Do not mind inserting an ad is easy</p>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 hidden-lg hidden-md  profile-header-2">
            <h2><strong> You have no ads </strong></h2>
            <p>Do not mind inserting an ad is easy</p>
        </div>
    </div>

@stop