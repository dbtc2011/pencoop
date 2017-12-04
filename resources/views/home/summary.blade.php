
@extends('layout')
@section('content')
    <div style="margin-left: 10%; width: 80%">
    	<br>
    	<h1>Welcome {{$user->name}}!</h1>
		<h1>SUMMARY DETAILS</h1>
		<table class="table table-bordered">
	        <tr>
	            <th>GL Code</th>
	            <th>GL Account</th>
	            <th>Balance</th>
	            <th>Action</th>
	        </tr>
	         <tr>
			    <td>11713</td>
			    <td>Loans Receivable Restructured</td>
			    <td>{{$lrr}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
	         <tr>
			    <td>11700001</td>
			    <td>Loans Receivable - Loan Against Deposit </td>
			    <td>{{$lrlad}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
	        <tr>
			    <td>11700002</td>
			    <td>Loans Receivable - Multi-purpose loan</td>
			    <td>{{$lrmpl}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>11700003</td>
			    <td>Loans Receivable - Others </td>
			    <td>{{$lro}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>11700004</td>
			    <td>Loans Receivable - Emergency</td>
			    <td>{{$lre}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>11700005</td>
			    <td>Loans Receivable - Appliances & Technologies</td>
			    <td>{{$lrat}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>11700006</td>
			    <td>Loans Receivable - Educational</td>
			    <td>{{$lred}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>11700008</td>
			    <td>Loans Receivable - Housing</td>
			    <td>{{$lrh}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>21100001</td>
			    <td>Fixed Saving Deposits</td>
			    <td>{{$fsd}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>21100002</td>
			    <td>Saving Deposit - Members</td>
			    <td>{{$sdm}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>21100003</td>
			    <td>Saving Deposit - Dependent</td>
			    <td>{{$sdd}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>30150</td>
			    <td>Paid-Up Share Capital - Common</td>
			    <td>{{$puscc}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
			<tr>
			    <td>30210</td>
			    <td>Paid-Up Share Capital - Preferred</td>
			    <td>{{$puscp}}</td>
			    <td><a class="btn btn-info" href="{{ action('HomeController@summary_details',$user,'11713') }}">Show details</a></td>
			</tr>
    </table>
	</div>

@endsection