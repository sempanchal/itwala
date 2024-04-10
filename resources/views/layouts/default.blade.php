<!doctype html>
<html lang="en">
    <head>
       @include('includes.head')
    </head>
    <body>
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
            @include('includes.sidebar')
            <div class="body-wrapper">
                @include('includes.header')   
            
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>