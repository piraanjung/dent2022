

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset("backend\dist\css\adminlte.min.css")}}">
    <script defer=""
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0cmFja3MlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwQmxhbmslMjBQYWdlJTIyJTJDJTIydyUyMiUzQTEzNjYlMkMlMjJoJTIyJTNBNzY4JTJDJTIyaiUyMiUzQTYyNSUyQyUyMmUlMjIlM0ExMzY2JTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRnBhZ2VzJTJGZXhhbXBsZXMlMkZibGFuay5odG1sJTIyJTJDJTIyciUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRnBhZ2VzJTJGdGFibGVzJTJGc2ltcGxlLmh0bWwlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCU3RA==">
    </script>
    
</head>

@yield('my-css')

    <div class="wrapper">

      
        <div class="content-wrapper" style="min-height: 2838.44px;">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                @yield('page-title')
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('page-title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                @yield('content')



            </section>

        </div>

      
    </div>

