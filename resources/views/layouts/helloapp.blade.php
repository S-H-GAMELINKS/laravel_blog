<html>
    <body>
        <h1>@yield('title')</h1>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('components.hello', ['msg' => 'HOGE'])
    </body>
</html>