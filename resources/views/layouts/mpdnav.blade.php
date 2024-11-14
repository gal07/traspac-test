<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('mpd/assets/img/sidebar-1.jpg') }}">
    
    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text">
            Employee App
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com/" class="simple-text">
            EAP
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('mpd/assets/img/default-avatar.png') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{ Auth::user()->name }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{route('profile.edit')}}">{{ __('Profile') }}</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p>Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="pages/pricing.html">Pricing</a>
                            <div class="collapse" id="pagesExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="pages/timeline.html">Timeline</a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="pages/timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="pages/login.html">Login Page</a>
                        </li>
                        <li>
                            <a href="pages/register.html">Register Page</a>
                        </li>
                        <li>
                            <a href="pages/lock.html">Lock Screen Page</a>
                        </li>
                        <li>
                            <a href="pages/user.html">User Profile</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>