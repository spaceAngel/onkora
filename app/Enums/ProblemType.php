<?php

namespace App\Enums;

enum ProblemType: string
{
	case NAUSEA = 'nevolnost';
	case BLEEDING = 'krvácení';
	case PAIN = 'bolest';
	case VOMITTING = 'zvracení';
	case INSOMNIA = 'nespavost';

}
