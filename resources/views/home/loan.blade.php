@extends('layout')


@section('content')
    <div style="margin-left: 10%; width: 80%">
    	<br>
		<h1>LOAN CALCULATOR</h1>
		<form name="addem" action="" id="addem" oninput="calculateMonthlyAmort()">
			<table>
				<tr>
					<td style="width: 200px">Principal :</td>
					<td><input name="principal" type="text" onkeyup="calculateMonthlyAmort()"></td>
				</tr>
				<tr>
					<td>Terms :</td>
					<td>
						<select name="terms">
						    <option value="48">48</option>
						    <option value="36">36</option>
						    <option value="24">24</option>
						    <option value="12">12</option>
  						</select>
					</td>
				</tr>
				<tr>
					<td>Interest rate : </td>
					<td> 22.8%</td>
				</tr>
				<tr>
					<td>Monthly Amort : </td>
					<td id = "monthly_amort">0</td>
				</tr>
			</table>
		</form>
		<div id = "myDynamicTable" name = "myDynamicTable">
			<input type="button" id="create" value="Show details" onclick="Javascript:addTable()">
		</div>
	</div>
@stop