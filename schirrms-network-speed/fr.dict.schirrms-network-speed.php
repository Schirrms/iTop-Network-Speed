<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2019 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:NetworkSpeed' => 'Vitesse Réseau',
	'Class:NetworkSpeed/Attribute:humanspeed' => 'Vitesse réseau format humain',
	'Class:NetworkSpeed/Attribute:humanspeed+' => 'Champ en lecture seule. Affiche la vitesse réseau dans un format \'humain\'. Il est calculé à partir de la vitesse en bit/s',
	'Class:NetworkSpeed/Attribute:bitspeed' => 'Vitesse de la connexion en bit/s',
	'Class:NetworkSpeed/Attribute:bitspeed+' => 'Saisissez dans ce champs la vitesse en bit/s. Oui, le chiffre peut être (et sera probablement) énorme.',
	'Class:NetworkSpeed/Attribute:comment' => 'Notes complémentaires',
	'Class:NetworkSpeed/Attribute:humanspeed_id' => 'Vitesse en format humain',
	'Class:NetworkSpeed/Attribute:IPInterfaces_list' => 'Toutes les interfaces à cette vitesse',
	'Class:NetworkSpeed/UniquenessRule:bitspeed' => 'Une vitesse \'$this->bitspeed$\' ($this->humanspeed$) a déjà été définie',
	'Class:NetworkSpeed/UniquenessRule:bitspeed+' => 'Il ne peut y avoir qu\'une entrée par vitesse',
	'Class:IPInterface/Attribute:humanspeed_id' => 'Vitesse humaine',
	'Class:IPInterface/Attribute:humanspeed_id+' => 'Choisissez la vitesse de l\'interface. Cliquez \'+\' si votre vitesse n\'est pas présente.',
	'Class:PhysicalInterface/Attribute:humanspeed_id' => 'Vitesse humaine',
	'Class:PhysicalInterface/Attribute:humanspeed_id+' => 'Choisissez la vitesse de l\'interface. Cliquez \'+\' si votre vitesse n\'est pas présente.',
));
?>
