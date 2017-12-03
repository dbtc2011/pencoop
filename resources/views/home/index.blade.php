@extends('layout')

@section('content')
<div style="float: left; width: 65%">
		<br>
		<br>
		<br>
		<img src="/images/logo.png" style="width: 60%; margin-left: 20%;">
		<br>
		<br>
		<br>
		<br>
		<h3 style="text-align: center;">"BUTI NALANG MAY PENCOOP"</h3>
		<h5 style="text-align: center; width: 80%; margin-left: 10%">As leader in the industry, PenCoop has set the bar with its unwavering commitment to quality, performance and exceptional customer care. Through our extreme selection of services and expansive inventory, we go above and beyond to ensure your needs are, not just met, but exceeded.</h5>
</div>
<div style="float :right; width: 35%; margin-top: 100px">
	@if ($message = Session::get('fail'))
        <div style="width: 300px; align-self: center">
            <h1 style="text-align: center; color: red">{{ $message }}</h1>
        </div>
	@endif
	{!! Form::open(array('route' => 'home.store','method'=>'POST')) !!}
         @include('home.login_form')
    {!! Form::close() !!}
    <button style="width: 300px; height: 80px; align-self: center; margin-top: 50px; background:url(/images/loanCalculator.png) no-repeat;" type="button"></button>
</div>
@stop