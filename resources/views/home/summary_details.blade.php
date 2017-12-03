@extends('layout')


@section('content')
    <div style="margin-left: 10%; width: 80%">
    	<br>
		<h1>SUMMARY DETAILS</h1>
		<table class="table table-bordered">
	        <tr>
	            <th>Multi-purpose Loan</th>
	            <th>Credit</th>
	            <th>Debit</th>
	            <th>Date</th>
	        </tr>
    		@foreach($user as $plan)
			 <tr>
			    <td>{{$plan->acc_code}}</td>
			    <td>{{$plan->credit}}</td>
			    <td>{{$plan->debit}}</td>
			    <td>{{$plan->doc_date}}</td>
			 </tr>
   			@endforeach
    </table>
	</div>
@stop

@extends('layout')

