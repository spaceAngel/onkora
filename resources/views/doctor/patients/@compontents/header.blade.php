<div class="row border">
	<div class="col-3">	Poslední návštěva</div>
	<div class="col border">{{$patient->visit_last->format('d.m.Y')}}</div>
</div>
<div class="row border">
	<div class="col-3">Příští událost</div>
	<div class="col">{{$patient->visit_next->format('d.m.Y H:i')}}</div>
</div>