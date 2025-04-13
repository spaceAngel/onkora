<?php

namespace App\Enums;

enum VisitType: String {
	case BLOOD_SAMPLE =  'Odběr krve';
	case THERAPY_CHEMO = "Chmetoerapie - aplikace";
	case THERAPY_RADIO = "Ozařování";
	case APPOINTMENT = "Kontrola onkologem";
	case RADIOLOGY_CT = "CT vyšetření";
	case RADIOLOGY_MRI = 'Magnetická rezonance';
	case PSYCHOTHERAPY = 'Psychoterapie';
	case NUTRITIONIST = "Nutriční konzultace";
	case PHYSIOTHERAPY = 'Fyzioterapie';

}
