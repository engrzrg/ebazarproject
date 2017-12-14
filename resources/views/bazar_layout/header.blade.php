<div class="row my-header">
    <div class="col-md-4 hidden-sm hidden-xs left-btn">
        <a href="{{route('listing.create')}}" class="btn"><i class="fa fa-plus"></i> <span style="color: black">Add Listing</span></a>
    </div>
    <div class="col-md-4 my-logo text-center">
        <a href="{{url('/')}}"> <img src="{{asset('bazar/images/logo/logo-sbazar.png')}}" alt="my bazar">
        </a>
    </div>

    <div class="text-center hidden-md hidden-lg left-btn ">
        <a href="{{route('listing.create')}}" class="btn"><i class="fa fa-plus"></i> <span style="color: black">Add Listing</span></a>
    </div>

    <div class="col-md-4  hidden-sm  hidden-xs " >
        <div class="right-btn">
            @if(!Sentinel::check())
            <a href="{{route('guard')}}" class="btn"><span class="fa fa-sign-in"></span><span style="color: black"> Login</span></a>
            @endif
            @if(Sentinel::check()){
                 <a href="{{route('profile.index')}}" class="btn"><span class="fa fa-user"></span><span style="color: black"> Profile</span></a>
                <form action="{{route('logout')}}" id="logout-form" method="post">
                    {{csrf_field()}}
                <a href="#" onclick="document.getElementById('logout-form').submit()" class="btn"><span class="fa fa-sign-in"></span><span style="color: black"> Logout</span></a> 
                </form>}            
            @endif
        </div>
         </div>

    <div class="text-center hidden-md hidden-lg text-center left-btn" >
        <div class="right-btn">
        <a href="{{route('profile.index')}}" class="btn"><span class="fa fa-user"></span><span style="color: black"> Profile</span></a>
        <a href="{{route('guard')}}" class="btn"><span class="fa fa-sign-in"></span><span style="color: black"> Login</span></a>
    </div>
    </div>
</div>
<div class="row my-header">
    <div class="col-md-12 ad-status">
        <p >Choose from <strong>1 584 585</strong> adverts. The last day added <strong>58,807</strong> ads.</p>
    </div>
</div>