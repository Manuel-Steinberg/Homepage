<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
	limit: 10
files: false
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