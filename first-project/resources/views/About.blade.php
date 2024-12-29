<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
        <h1>About Page</h1>
        

        <!-- Session -->
        @if(session('user'))
        <h1>Welcome, {{session('user')}}</h1>
        <a href="logout">Logout</a>
        @else
        <h1>No User Found.</h1>
        <a href="form">Login Form</a>
        @endif
</div>
