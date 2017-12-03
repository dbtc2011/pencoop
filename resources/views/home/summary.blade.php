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
			    <td>11700002</td>
			    <td>Loans Receivable - Multi-purpose loan</td>
			    <td>{{$lrmpl}}</td>
			    <td></td>
			</tr>
			<tr>
			    <td>11700004</td>
			    <td>Loans Receivable - Emergency</td>
			    <td>{{$lre}}</td>
			</tr>
			<tr>
			    <td>21100001</td>
			    <td>Fixed Saving Deposits</td>
			    <td>{{$fsd}}</td>
			</tr>
			<tr>
			    <td>30130</td>
			    <td>Subscribed Share Capital - Common</td>
			    <td>{{$ssc}}</td>
			</tr>
			<tr>
			    <td>30140</td>
			    <td>Subscription Receivable - Common</td>
			    <td>{{$sr}}</td>
			</tr>
			<tr>
			    <td>30150</td>
			    <td>Paid-Up Share Capital - Common</td>
			    <td>{{$pusc}}</td>
			</tr>
			<tr>
			    <td>40110</td>
			    <td>Interest Income from Loans</td>
			    <td>{{$iifl}}</td>
			</tr>
    </table>
	</div>
@stop