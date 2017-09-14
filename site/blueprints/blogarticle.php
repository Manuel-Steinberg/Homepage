<?php if(!defined('KIRBY')) exit ?>

title: Blog Article
pages: false
preview: parent
files: true
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
    label: Content
    type: headline
	date:
    label: Date
    type: date
    width: 1/2
    default: today
	author:
    label: Author
    type: text
    width: 1/2
	tags:
    label: Tags
    type: tags
	text:
    label: Text
    type: textarea