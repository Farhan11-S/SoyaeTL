<nav class="navbar navbar-expand-md navbar-dark bg-danger shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbar-collapse" href="#navbar-dropdown" class="nav-link dropdown-toggle text-white h6" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" role="button">{{ __('Project/s') }}</a>
                    <div id="navbar-dropdown" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">First Item</a>
                        <a class="dropdown-item" href="#">Second One</a>
                        <a class="dropdown-item" href="#">The last but not the least</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white h6" href="">{{ __('Donate') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $('navbar-collapse').on('show.bs.collapse hide.bs.collapse', function(e) {
        $(this).toggle();
    })
</script>