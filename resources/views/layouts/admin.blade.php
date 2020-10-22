@extends('layouts.app')
@section('styles')
@yield('styles_page')
@endsection
@section('body')

        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

        @include('partials.header')
        <!-- begin: If not in use please delete both, part show message  -->
        @include('partials.sidebar_message')
        @include('partials.show_chat')
        <!-- end -->

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                @include('partials.siderbar')

                <div class="pcoded-content">
                    @include('partials.breadcrumbs')
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="styleSelector">
            </div>

            </div>
        </div>
    </div>
@endsection
