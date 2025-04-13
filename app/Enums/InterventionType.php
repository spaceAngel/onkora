<?php

namespace App\Enums;

enum InterventionType:String
{

	case TherapyRadio = "Ozařování";
	case Therapy = "Chemoterapie - aplikace";

	case PHARMACOLOGY_ANALGETICS_OTHER_NEW = 'Nová neopiodní analgetika';
	case PHARMACOLOGY_ANALGETICS_OTHER_INCREASE = 'Zvýšení dávky nepiodní analgetika';

	case PHARMACOLOGY_ANALGETICS_OPIOD_NEW = 'Nová opiodni analgetika';
	case PHARMACOLOGY_ANALGETICS_OPIOD_INCREASE = 'Zvýšení dávky opiodních analgetika';


	case PHARMACOLOGY_PSYCHO_NEW = 'Nová psychofarmaka';
	case PHARMACOLOGY_PSYCHO_INCREASE = 'Zvýšení dávky psychofarmak';

	case PHARMACOLOGY_ANTIEMETICS_NEW = 'Nová antiemetika';
	case PHARMACOLOGY_ANTIEMETICS_INCREASE = 'Zvýšení dávky antiemetik';

	case PHARMACOLOGY_OTHER = "Jiná léčiva";

	case PHYSIOTHERAPY = 'Fyzioterapie';
	case NUTRINIONIST = 'Nutriční konzultace';
	case PSYCHOTERAPEUTICS = 'Psychologická intervence';
}
