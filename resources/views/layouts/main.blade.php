@extends('layouts.app')

@section('body')
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('layouts.partials.navbar')

        @include('layouts.partials.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('title')</h1>
                </div>
                <div class="section-body">
                    <h2 class="section-title">@yield('section-title')</h2>
                    <p class="section-lead">
                        @yield('section-lead')
                    </p>
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </section>
        </div>

        @include('layouts.partials.footer')
    </div>
@endsection
