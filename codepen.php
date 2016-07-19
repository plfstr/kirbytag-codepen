<?php

kirbytext::$tags['codepen'] = array(

	'attr' => array(
			'height', 'type', 'class'
		),
		'html' => function($tag) {
			
			$source = $tag->attr('codepen');
			
			if( !preg_match('!codepen.io\/([a-z0-9A-Z_-]+)\/pen\/([a-z0-9_-]+)!i', $source, $array) ) {
				return false;
			}
			
			// Set default Pen height or use 350 default
			$height = $tag->attr('height', c::get('codepenHeight', '350'));
			
			// Accept Pen type overide or use result as default
			$result = $tag->attr('type', c::get('codepenDisplay', 'result'));
			
			// Set a class on the CodePen iframe
			$penclass = c::get('codepenClass') .' '. $tag->attr('class');
			
			// Set default theme-id embed theme (About embed themes: http://blog.codepen.io/2013/07/23/the-new-embed-builder-customize-every-aspect/)
			$pentheme = c::get('codepenTheme'); // Add your theme-id value here. Uses standard CodePen embed theme by default if left blank.
			
			// Set click-to-play
			$penpreview = c::get('codepenPreview');
						
			// Builds Pen HTML output
			$html = '<figure class="code-container">';
			$html .= '<pre class="codepen" data-theme-id="'. $pentheme .'" data-height="'. $height .'" data-type="'. $result .'" data-slug-hash="'. $array[2] .'" data-user="'. $array[1] .'" data-class="'. $penclass .'" data-preview="'. $penpreview .'"><code></code></pre>';
			$html .= '<script async src="https://assets.codepen.io/assets/embed/ei.js"></script></figure>';
		
			return $html;
		
	}

);