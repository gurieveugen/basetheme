<?php

/**
 * application.php - Write your custom code below.
 */

$theme_options = Page::make('my-page', 'Theme options')->set(
	array(
	    'capability'    => 'manage_options',
	    'icon'          => 'http://website.com/wp-content/...',
	    'position'      => 20, 
	    'tabs'          => false
	)
);

$sections[] = Section::make('section-slug-name', 'Section Title');
$sections[] = Section::make('section-slug-name2', 'Section Title 2');

$theme_options->addSections($sections);

$settings['section-slug-name'] = array(
    Field::text('street-address'),
    Field::text('phone'),
    Field::media('theme-logo')
);

$settings['section-slug-name2'] = array(
    Field::infinite(
    	'books', array(
        	Field::text('title'),
        	Field::media('image')
    	)
    )
);

$theme_options->addSettings($settings);