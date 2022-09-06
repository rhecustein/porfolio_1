
<!DOCTYPE html>
<html lang="en">
@include('components.admin.head')
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
       @include('components.admin.menu')
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            @include('components.admin.navbar')
            <div class="app-content">
               @yield('content')
            </div>
        </div>
    </div>
  @include('components.admin.footer')
</body>
</html>