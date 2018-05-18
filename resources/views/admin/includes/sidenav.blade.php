    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                @foreach ($menus as $menu)
                    @php  if($menu->path != ""){ @endphp
                    <li style="padding: 5px 0 0;">
                        <a href="profile.html" class="waves-effect"><i class="{{$menu->icon}}" aria-hidden="true"></i>{{$menu->title}}</a>
                    </li>
                    @php   }@endphp
                @endforeach
            </ul>
        </div>
    </div>