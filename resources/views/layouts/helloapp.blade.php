<html>
    <body>
        <h1>@yield('title')</h1>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        @component('components.hello')
            @slot('msg')
                HOGE
            @endslot
        @endcomponent
    </body>
</html>