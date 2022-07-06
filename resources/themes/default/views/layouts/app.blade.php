<!DOCTYPE html>
<html lang="{{ config('app.locale') ?? 'ru' }}">
<head>
    @include('layouts.partials.html_header')
</head>
<body>

@include('layouts.partials.main_header')

<div class="container-fluid content main-container" role="main">

    <div class="content-wrapper">
        <section class="content">
            @yield('main_content')
        </section>
    </div>

</div>

<footer class="footer">
    @include('layouts.partials.footer')
</footer>

@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
