<div class="row y-middle">
    <div class="col-md-7">
        <ul class="topbar-contact">
            <li>
                <i class="flaticon-email"></i>
                <a href="mailto:support@rstheme.com">info@pallasbrill.com </a>
            </li>
            <li>
                <i class="flaticon-location"></i>
                Get In touch UK: +44 7398 624184
            </li>
        </ul>
    </div>
    <div class="col-md-5 text-right">

        @guest
            @if (Route::has('login'))
                <ul class="topbar-right">
                    <li class="btn-part">
                        <a class="apply-btn" href="/login">Dashboard</a>
                    </li>
                </ul>
            @endif
        @else
            <nav class="rs-menu">
                <ul class="nav-menu">
                    <li class="menu-item-has-children">
                        <a href="#" class="text-dark">{{ Auth::user()->name }}<i class="fas fa-caret-down ml-2"></i>
                        </a>
                        <ul class="sub-menu bg-light">
                            <li class="active"><a href="href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();""
                                    class="text-dark">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        @endguest
    </div>
</div>
