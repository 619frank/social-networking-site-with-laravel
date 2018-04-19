<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a href="{{route('home')}}" class="navbar-brand">Social Networking</a>
        </div>
        <div class="collapse navbar-collapse">
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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Frank</a></li>
                <li><a href="#">Update Profile</a></li>
                <li><a href="#">Signout</a></li>
                <li><a href="{{route('auth.signup')}}">Sign up</a></li>
                <li><a href="#">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>