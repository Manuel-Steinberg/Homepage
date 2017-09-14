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
	text:
    label: Text
    type: textarea
	picture:
		label: Bild
		type: text