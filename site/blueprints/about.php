<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
	pageSettings-a:
    label: Meta Information
    type: headline
	description:
    label: Description
    type:  textarea
	pageSettings-b:
    label: Content
    type: headline
	intro:
		label: Intro
		type: textarea
	sport:
		label: Sportarten
		type: tags
	hardware:
		label: Hardware
		type: tags
	sport_picture:
		label: Sportarten-Bild
		type: text
		width: 1/2
	hardware_picture:
		label: Hardware-Bild
		type: text
		width: 1/2