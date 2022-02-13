<?php

return [
	// mody css property from here
	'class'		=>	'', // extra class to be added on alertt component
	'right'		=>	'25px', 
	'bottom'	=>	'25px', 
	'top'		=>	false, 
	'left'		=>	false, 
	'z_index'	=>	99999,
	'max_width'	=>	'500px',
	'min_width'	=>	'350px',
	'border_radius'	=>	'5px',

	'header'	=>	[
		'font_size'	=>	'16px',
	],
	'body'	=>	[
		'font_size'		=>	'15px',
		'line_height'	=>	'20px',
	],
	'footer'	=>	[
		'font_size'	=>	'13px',
		'status'	=>	true,
	],

	'timeout'	=>	6000,

	// default message and colors
	'success'	=>	[
		'title'	=>	'Operation is successfully done',
		'name'	=>	'success',
		'color'	=>	'green',
	],
	'info'	=>	[
		'title'	=>	'New Information Received',
		'name'	=>	'info',
		'color'	=>	'purple',
	],
	'primary'	=>	[
		'title'	=>	'New Information Received',
		'name'	=>	'primary',
		'color'	=>	'blue',
	],
	'danger'	=>	[
		'title'	=>	'Operation has failed / alert / error',
		'name'	=>	'danger',
		'color'	=>	'red',
	],
	'dark'	=>	[
		'title'	=>	'New Information Received',
		'name'	=>	'dark',
		'color'	=>	'#444',
	],
	'warning'	=>	[
		'title'	=>	'A warning msessage is here',
		'name'	=>	'warning',
		'color'	=>	'yellowgreen',
	],
];