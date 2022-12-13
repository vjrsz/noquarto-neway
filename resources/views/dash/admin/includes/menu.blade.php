<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{asset('dash/img/logo.png')}}" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class='sidebar-title'><a href="{{route('dashboard.admin.index')}}"><img src="{{asset("dash/img/icon01.svg")}}"></a></li>
                <li class='sidebar-title'><a href="{{route('dashboard.admin.blockeddate.index')}}"><img src="{{asset("dash/img/icon01.svg")}}"></a></li>
                <li class='sidebar-title'><a href="{{route('dashboard.admin.perfil')}}"><img src="{{asset("dash/img/icon03.svg")}}"></a></li>
                <li class='sidebar-title'><a href="{{route('dashboard.admin.perfil')}}"><img src="{{asset("dash/img/perfil.png")}}"></a></li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>