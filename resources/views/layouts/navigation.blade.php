<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a href="{{route('home')}}" class="navbar-brand">Social Networking</a>
        </div>
        <div class="collapse navbar-collapse">
            @if(Auth::check())
                <ul class="nav navbar-nav">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friends</a></li>
                </ul>
                <form action="#" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" name="query" placeholder="find people" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            @endif
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="#">{{Auth::user()->getFirstnameOrUserName()}}</a></li>
                    <li><a href="#">Update Profile</a></li>
                    <li><a href="{{route('auth.signout')}}">Signout</a></li>
                @else
                    <li><a href="{{route('auth.signup')}}">Sign up</a></li>
                    <li><a href="{{route('auth.signin')}}">Sign in</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>