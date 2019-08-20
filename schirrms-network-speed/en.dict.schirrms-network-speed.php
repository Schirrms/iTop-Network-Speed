<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:NetworkSpeed/Attribute:humanspeed' => 'Connection speed human readable',
	'Class:NetworkSpeed/Attribute:humanspeed+' => 'Readonly Field. show the network speed in an human readable form. It is computed from the Bit Speed',
	'Class:NetworkSpeed/Attribute:bitspeed' => 'Connection speed in bit/s',
	'Class:NetworkSpeed/Attribute:bitspeed+' => 'Set in this field the network speed in bit/s. Yes, the number can (and usualy will) be huge.',
	'Class:NetworkSpeed/Attribute:comment' => 'Complementary notes',
	'Class:NetworkSpeed/Attribute:comment' => 'Complementary notes',
	'Class:IPInterface/Attribute:IPInterfaces_list' => 'All interfaces at this speed',
	'Class:IPInterface/Attribute:humanspeed_id+' => 'Select here the interface speed. Clic + if the needed speed is not present.',
	'Class:PhysicalInterface/Attribute:humanspeed_id' => 'Human speed',
	'Class:PhysicalInterface/Attribute:humanspeed_id+' => 'Select here the interface speed. Clic + if the needed speed is not present.',
));
?>
