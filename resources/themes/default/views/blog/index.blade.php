@extends('layouts.app')

@section('html_header')
@endsection

@section('main_content')
    <div class="container mb-30px">
        <div class="last-post">
            <a href="#">
                <img src="{{url('images/banners/banner.png')}}" alt="" class="img-fluid" />
                <span class="last-post-content">
                    <span class="last-post-content-category">
                        sass/less/css
                    </span>
                    <span class="last-post-content-title">
                        Учимся писать стили на Sass/Less/Css
                    </span>
                    <span class="last-post-content-date">
                        10 Июня, 2019
                    </span>
                </span>
            </a>
        </div>
    </div>
    {{--<div class="container">--}}
        {{--<div class="last-post">--}}
            {{--<div class="last-post__content">--}}
                {{--<h3>sass/less/css</h3>--}}
                {{--<h1>Учимся писать стили на Sass/Less/Css</h1>--}}
                {{--<h4>10 Июня, 2019</h4>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

@section('inline_scripts')
@endsection
