<?php

namespace App\Enums;

enum VisitState: String
{
	case UNCONFIRMED = 'Nepotvrzeno';
	case CONFIrMED = 'Potvrzeno';
	case CANCELLED = 'Zrušeno';
	case MISSED = 'Nedostavil se';
}
