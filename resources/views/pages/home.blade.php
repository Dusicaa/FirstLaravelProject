@extends('layouts.front')

@section('title')
    Home page
@endsection

@section('meta')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('appendCss')
    @parent
    <link href="{{ asset('/') }}css/blog-home.css" rel="stylesheet">
@endsection

@section('banner')
<section id="banner" style='background-image:url("{{asset('/')}}css/images/overlay.png"), url("{{asset('/')}}images/banner.jpg");'>
   	
    <h2>Novi sajt Laravel</h2>
				<p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
				<ul class="actions">
					<li><a href="pages/news" class="button special big">News</a></li>
				</ul>
			</section>
@endsection

@section('center')      
                                @include('components.section_one')		
				@include('components.section_two')			
				@include('components.section_three')			
			        @include('components.section_four')
			
			
@endsection