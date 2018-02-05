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
        Log in photographer
    </p>
@else
    <p class="text-success">
        Log out photographer
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        Log in admin
    </p>
@else
    <p class="text-success">
        Log out admin
    </p>
@endif