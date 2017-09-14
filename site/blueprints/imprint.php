<?php if(!defined('KIRBY')) exit ?>

title: Imprint
pages: false
files: false
fields:
  title:
    label: Title
    type: title
	pageSettings-a:
    label: Meta Information
    type: headline
	description:
    label: Description
    type:  textarea
	pageSettings-b:
    label: Contact
    type: headline
	law:
		label: Gesetz
		type: text
	name:
		label: Name
		type: text
		width: 1/4
	street:
		label: Straße
		type: text
		width: 1/4
	zip:
		label: PLZ
		type: text
		width: 1/4
	city:
		label: Ort
		type: text
		width: 1/4
	tel:
		label: Telefon
		type: tel
		width: 1/2
	email:
		label: E-Mail
		type: text
		width: 1/2
	pageSettings-c:
    label: Disclaimer
    type: headline
	text:
    label: Text
    type: textarea