<style>
    .nav-link:hover {
        font-size: 20px;
    }
</style>
@if(\Illuminate\Support\Facades\Auth::user())
    <li class="nav-item">
        <div class="nav-link sidebar1">
            <div>
                <img style="width:50px; border-radius: 100%"
                     src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                     alt="My Avatar">
            </div>
        </div>
        <div class="sidebar"
             style="width: 300px; display: none; position: absolute; background: #f7f7f7; padding: 30px; border-radius: 5px">

            <a href="" style="color: #34ce57" class="nav-link" data-toggle="modal" data-target="#myModalEditUser"><i style="margin-right: 25px"
                    class="fas fa-user-alt"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}
            </a>

            <hr>
            <a href="" data-toggle="modal" data-target="#myModalChangePassword" style="color: #34ce57" class="nav-link"><i
                    style="margin-right: 25px" class="fas fa-key"></i>Change password</a>
            <hr>
            <a href="{{route('house.create')}}" style="color: #34ce57" class="nav-link"><i style="margin-right: 25px"
                                                                                           class="fas fa-store"></i>Store</a>
            <hr>

            <a href="{{route('users.rental-list',\Illuminate\Support\Facades\Auth::user()->id)}}" style="color: #34ce57" class="nav-link"><i style="margin-right: 25px" class="fas fa-list"></i>Rental list</a>
            <hr>
            <a href="{{route('order.cancel',\Illuminate\Support\Facades\Auth::user()->id)}}" style="color: #34ce57" class="nav-link"><i style="margin-right: 25px"
                                                                  class="fas fa-shopping-cart"></i>Orders</a>

            <hr>
            <a style="color: #34ce57" class="nav-link" href="{{route('users.logout')}}"><i style="margin-right: 25px"
                                                                                           class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </li>
@else
    <li class="nav-item">
        <div class="nav-link btn" data-toggle="modal" data-target="#myModal">
            Login
        </div>
    </li>
    <li class="nav-item">
        <div data-toggle="modal" data-target="#myModalRegister" class="nav-link btn">Register</div>
    </li>

@endif
<script>
    $(document).ready(function () {
        $(".sidebar1").hover(function () {
            $(".sidebar").fadeIn();
            $('*').on('click', function () {
                $(".sidebar").fadeOut();
            });
        });
    });
</script>



