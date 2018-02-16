@if(Auth::guard('web')->check())
    <p class="text-success">
        Log in User
    </p>
@else
    <p class="text-success">
        Log out User
    </p>
@endif

@if(Auth::guard('photographer')->check())
    <p class="text-success">
        Log in Photographer
    </p>
@else
    <p class="text-success">
        Log out Photographer
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        Log in Admin
    </p>
@else
    <p class="text-success">
        Log out Admin
    </p>
@endif