@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	Nos Mudamos a summary.blade
@endsection

@section('scripts')
	@parent
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<script src="{{ url ('/js/adminlte/home/dashboard.js') }}" type="text/javascript"></script>
@stop