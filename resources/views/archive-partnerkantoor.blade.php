@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="container">
	@while(have_posts()) @php(the_post())
	  	@includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
	@endwhile
</div>

@endsection

