<table class="table">
	<thead>
		<tr>
			<th>Datum</th>
			<th>Typ</th>
			<td>Stav termíná</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($visits as $visit)
			<tr>
				<td>
					<span class="statebox statebox-{{strtolower($visit->state->name)}}"></span>
					{{$visit->date->format('d.m.Y H:i')}}
				</td>
				<td>{{$visit->type}}</td>
				<td>
					<span class="state-{{strtolower($visit->state->name)}}">{{$visit->state}}</span>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>