@extends('admin.layout')


@section('title')
	Badges
@stop

@section('titlebar-title')
	<i class="icon-star"></i>
	Badges
@stop

@section('css')
<style>
</style>
@stop

@section('admin-content')
	
	<h2 class="header green">Badges</h2>

	hi

@stop


@section('script')
<script>
$(document).bind('keyup', '/', function() {
	$('#search').focus();
});
</script>
@stop