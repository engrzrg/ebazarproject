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

    <div class="row">

    </div>

@stop