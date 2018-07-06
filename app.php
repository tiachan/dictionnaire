<?php
// définitions principales

$dictionary =
	[
		'cat' => 'chat',
		'dog' => 'chien',
		'monkey' => 'singe',
		'panther' => 'panthère',
		'whale' => 'baleine',
	];

$word = 'cat';
$lang = 'fr';

switch ($lang) {
	case 'fr':
		foreach ($dictionary as $en => $fr) {
 			if ($en == $word) {
 				$translate = $dictionary[$en];

 				$message = "Le mot $word se traduit par $translate";

 				break 2;
 			}
 		}	

 		$message = "Ce mot n'a pas de traduction dans ce dictionnaire";

		break;

	case 'en':
		foreach ($dictionary as $en => $fr) {
 			if ($fr == $word) {
 				$message = "The word $word is translated by $en";

 				break 2;
 			}
 		}	
 		$message = "this word has no translation in our dictionary";

		break;
	
	default:
		$message = "Je ne sais traduire qu'en anglais et en français";	
}

// affichage du résultat
echo $message;