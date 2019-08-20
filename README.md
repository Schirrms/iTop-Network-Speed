# iTop-Network-Speed

[TOC]

# Goal

Adds a Network Speed Classes, for interfaces. so, instead of write down the speed for each interface, you select the speed from a combo box.

This allow to also find all interfaces running at the same speed.

While this extension is (hopefully) totally useable, this is more a study case :

Inside the 'Speed Class', you set a speed in bits/S.

And yes, that give very big numbers for current network speed : 10 G is 10 000 000 000 ! But I still think that a number as to be stored 'as is', and not with a supposed translation (one could choose that all speed are expressed in Mb/s, and the other could think they are Kb/s)

But 10000000000 is not really 'Human friendly'. So, as soon as you set-up a speed in b/s, another field is computed in more friendly way. So you set-up 10000000000 and you read 10 Gb/s

# Installation

As for all my extensions, just download the zip file, and copy the 'schirrms-...' directory in your extensions directory, then rerun the setup as usual.