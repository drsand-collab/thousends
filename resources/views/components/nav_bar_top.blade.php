<nav
    class="navbar navbar-expand-lg nav_bar_component"
    style="background-color: #024949;"
>
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('links') }}">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('thousands') }}">Thousands</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

    </div>
</nav>

<style>
    a.nav-link {
        color: #e5e7eb;
    }

    a.nav-link:hover {
        color: #c7cfae;
    }
</style>



