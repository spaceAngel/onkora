@foreach($messages as $message)
	<div class="row mb-4" >
		@if($message->doctor == null)
			<div class="col-3"></div>
		@endif
		<div class="col-6">
			<div class="row">
				<div class="col-8 fst-italic">{{$message->doctor}}</div>
				<div class="col-4 text-end">{{$message->date->format('d.m. H:i')}}</div>
			</div>
			<div class=" p-2 mt-1 border {{$message->doctor != null ? 'from-us' : ''}}">
				{{$message->text}}
			</div>
		</div>
	</div>
@endforeach
<div class="row">
	<div class="col-7">
		<form>
			<textarea class="form-control border-2 mt-2"></textarea>
			<input type="submit" class="btn btn-primary" value="Odeslat vzkaz pacientovi"/>
		</form>
	</div>
</div>