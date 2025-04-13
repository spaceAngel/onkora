@php
	$axeStep = 1;
@endphp
<svg viewBox="0 0 580 370" xmlns="http://www.w3.org/2000/svg">
	<line x1="60" x2="60" y1="00" y2="320" stroke="#000"  stroke-width="1"/>
	@for($i = 0; $i < 30; $i++)
		<text
				y="340" x="{{80 + ((($i) + 0.5)  * (520/30))}}"
				class="dataPointAxeLabel" text-anchor="end"
		>
			12.1.2024
		</text>
	@endforeach


	@for ($j = 0; $i <= 100 / $axeStep; $i++)
		{{$y = 320 - ((300 / (100 / $axeStep)) * $i)}}
		<text class="axeStep"  text-anchor="end" x="50" y="{{$y + 5}}">
			{{$axeStep * $j}} %
		</text>
		<line x1="60" x2="600" y1="{{$y}}" y2="{{$y}}" stroke="#222" stroke-dasharray="1 4"/>
	@endfor
	<line x1="60" x2="600" y1="320" y2="320" stroke="#444" />

</svg>