<div style="align-self: center; width: 300px; background: lightgray; border-radius: 10px">
	<br>
	<h2 style="text-align: center; margin-top: 5px">Account Verifier</h2>
	<table style="width: 280px; margin-left: 10px">
		<tr>
			<td style="width: 110px">Mem Code<td>
				{!! Form::text('mem_code', null, array('placeholder' => 'mem_code','class' => 'field')) !!}
			</td>
		</tr>
		<tr>
			<td style="width: 140px">Pin</td>
			<td>
				{!! Form::password('pin', null, array('placeholder' => 'pin','class' => 'field')) !!}
			</td>
		</tr>
	</table>
	<br>
	<input type="submit" name="submit" style="width: 50%; height: 30px; margin-left: 25%">
	<br>
	<br>
</div>

