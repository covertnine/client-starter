<?php

/**
 * C9 Client Setup
 *
 * @package c9-starter
 */

add_action('after_setup_theme', 'c9_client_setup');
if (!function_exists('c9_client_setup')) {

	/**
	 * Client setup, colors, post formats, block
	 */
	function c9_client_setup()
	{


		/**
		 * Editor color palette
		 */
		add_theme_support('editor-color-palette', array(
			array(
				'name' => 'primary',
				'color'    => '#000000',
				'slug' => 'color-primary',
			),
			array(
				'name' => 'secondary',
				'color' => '#333333',
				'slug'    => 'color-secondary',
			),
			array(
				'name' => 'success',
				'color' => '#21a77a',
				'slug'    => 'color-success',
			),
			array(
				'name' => 'info',
				'color'    => '#f7f7f9',
				'slug'    => 'color-info',
			),
			array(
				'name' => 'warning',
				'color'    => '#ec971f',
				'slug'    => 'color-warning',
			),
			array(
				'name' => 'danger',
				'color'    => '#843534',
				'slug'    => 'color-danger',
			),
			array(
				'name' => 'dark',
				'color'    => '#000000',
				'slug'    => 'color-dark',
			),
			array(
				'name' => 'light',
				'color'    => '#ffffff',
				'slug'    => 'color-light',
			),
		));

		/**
		 * Enable support for Post Formats
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery'
			)
		);
	}
}

/**
 * Registering block styles for specific Gutenberg Blocks
 */
register_block_style(
	'core/list',
	array(
		'name'         => 'light-text',
		'label'        => __('Light Color Text', 'c9-starter'),
	)
);

register_block_style(
	'core/list',
	array(
		'name'         => 'dark-text',
		'label'        => __('Dark Color Text', 'c9-starter'),
	)
);

/**
 * Registering block patterns category with core Gutenberg blocks
 */
add_action('init', 'c9starter_register_block_patterns_cat');
function c9starter_register_block_patterns_cat()
{
	if (class_exists('WP_Block_Patterns_Registry')) {
		register_block_pattern_category(
			'COVERT NINE',
			array('label' => __('C9 All Patterns', 'c9-starter'))
		);
		register_block_pattern_category(
			'landingpage',
			array('label' => __('C9 Page Templates', 'c9-starter'))
		);
		register_block_pattern_category(
			'Video',
			array('label' => __('C9 Video', 'c9-starter'))
		);
		register_block_pattern_category(
			'Audio',
			array('label' => __('C9 Audio', 'c9-starter'))
		);
		register_block_pattern_category(
			'Article',
			array('label' => __('C9 Article', 'c9-starter'))
		);
	}
}

/**
 * Registering block patterns with core Gutenberg blocks
 */
add_action('init', 'c9starter_register_block_patterns');
function c9starter_register_block_patterns()
{
	if (class_exists('WP_Block_Patterns_Registry')) {

		$theme_directory_uri = get_template_directory_uri();
		$image_path_1 = $theme_directory_uri . '/client/client-assets/img/20190619-disney-alaska-vacation-51-2.jpg';
		$image_path_2 = $theme_directory_uri . '/client/client-assets/img/widescreen-homepage-hero-1920x1200-v2.jpg';
		$image_path_3 = $theme_directory_uri . '/client/client-assets/img/c9-album-b.jpg';
		$image_path_4 = $theme_directory_uri . '/client/client-assets/img/20190621-disney-alaska-vacation-122-2-1024x683.jpg';
		$image_path_5 = $theme_directory_uri . '/client/client-assets/img/20190621-disney-alaska-vacation-58-2-1024x683.jpg';
		$image_path_6 = $theme_directory_uri . '/client/client-assets/img/20190619-disney-alaska-vacation-171-1024x683.jpg';
		$image_path_7 = $theme_directory_uri . '/client/client-assets/img/20190622-disney-alaska-vacation-66-2.jpg';
		$image_path_8 = $theme_directory_uri . '/client/client-assets/img/20190621-alaska-vacation-207-2.jpg';
		$image_path_9 = $theme_directory_uri . '/client/client-assets/img/20190622-alaska-vacation-66-2.jpg';
		$video_path_1 = $theme_directory_uri . '/client/client-assets/video/c9-starter-templates-clip.mp4';
		$logo_path = $theme_directory_uri . '/client/client-assets/img/feather-logo-gradient-rb.svg';
		$audio_path_1 = $theme_directory_uri . '/client/client-assets/audio/pew-pew.m4a';

		$c9_coming_soon_core_content = '<!-- wp:cover {"url":"' . esc_url($image_path_1) . '","id":2789,"dimRatio":80,"overlayColor":"color-primary","minHeight":995,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-color-primary-background-color has-background-dim" style="background-image:url(' . esc_url($image_path_1) . ');min-height:995px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":3798,"width":"42px","height":"auto","aspectRatio":"1","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-3798" style="aspect-ratio:1;width:42px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Something Great is Coming Soon</mark></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Click the button below to get notified via email when we\'re up and running</mark></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":10} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Get Notifications</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"color-light","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->';


		register_block_pattern(
			'c9-starter/c9-coming-soon-core',
			array(
				'title'			=> __('Coming Soon Opt-in', 'c9-starter'),
				'description' 	=> __('Start building your audience before you launch with a coming soon page that captures emails or phone numbers.', 'c9-starter'),
				'content'		=> $c9_coming_soon_core_content,
				'categories'	=> array('COVERT NINE', 'header', 'buttons', 'text', 'landingpage')
			),
		);

		$c9_artist_promo_social_profiles_content = '<!-- wp:cover {"url":"' . esc_url($image_path_8) . '","id":2789,"dimRatio":60,"overlayColor":"color-primary","minHeight":995,"minHeightUnit":"px","align":"full","style":{"color":[]},"c9ContainerWidth":""} -->
		<div class="wp-block-cover alignfull" style="min-height:995px"><span aria-hidden="true" class="wp-block-cover__background has-color-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2789" alt="" src="' . esc_url($image_path_8) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:image {"align":"center","id":3798,"width":"72px","height":"auto","aspectRatio":"1","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
		<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-3798" style="aspect-ratio:1;width:72px;height:auto"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Artist Promo Tree</mark></h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Advanced "Link tree" style layout with video sections + tour links</mark></p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":"10px"} -->
		<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:button {"backgroundColor":"color-light","width":50,"style":{"color":{"text":"#181818"},"elements":{"link":{"color":{"text":"#181818"}}}}} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-color-light-background-color has-text-color has-background has-link-color wp-element-button" href="#stream-album" style="color:#181818">Stream Album</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"textColor":"color-light","width":50,"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color wp-element-button" href="#tour-dates">Tour Dates</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"backgroundColor":"c9music-dark-gray","textColor":"color-light","width":50,"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-c-9-music-dark-gray-background-color has-text-color has-background wp-element-button" href="#tour-promo-video">Tour Promo Video</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#fefefe"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#new-music-video" style="color:#fefefe">New Music Video</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"textColor":"color-light","width":50,"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color wp-element-button" href="#">YouTube</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#bb9b6eeb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#bb9b6eeb">Instagram</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#31ff00eb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#31ff00eb">Spotify</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#ffffffeb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffffeb">Apple Music</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#f9ff00eb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#f9ff00eb">Merch</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:cover -->

		<!-- wp:cover {"url":"' . esc_url($video_path_1) . '","id":3697,"dimRatio":80,"overlayColor":"color-primary","backgroundType":"video","minHeight":995,"minHeightUnit":"px","align":"full","layout":{"type":"constrained","contentSize":"1140px"},"c9ContainerWidth":""} -->
		<div class="wp-block-cover alignfull is-light" style="min-height:995px"><span aria-hidden="true" class="wp-block-cover__background has-color-primary-background-color has-background-dim-80 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="' . esc_url($video_path_1) . '" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{"background":"#ededed"}}} -->
		<div class="wp-block-group has-background" style="background-color:#ededed">
		
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#222222"}}} -->
		<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#222222">Watch the video to learn more.</h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","textColor":"color-primary","fontSize":"small"} -->
		<p class="has-text-align-center has-color-primary-color has-text-color has-small-font-size">Watch the video below to learn how to build page templates with C9 Blocks</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":"29px"} -->
		<div style="height:29px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4">Building Pages</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->

<!-- wp:columns {"style":{"color":{"background":"#f3f3f3"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns has-background" id="stream-album" style="background-color:#f3f3f3;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-center has-large-font-size">♫ Listen to the new single ♫<br><span style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-secondary-background-color">Stream-Me-Please.mp3</span></h1>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","placeholder":"Content…","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">If you haven\'t, we highly recommend installing the <a href="#">C9 Blocks</a> and <a href="#">C9 Admin Dashboard Plugins</a>. <strong>For animations, and additional child theme features like a single page animated website, get on the C9 email list.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class=""><!-- wp:list-item -->
<li class=""><strong><strong><span class="has-inline-color has-color-secondary-background-color">✓</span></strong> Song Name</strong> - Track Title</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> Song Name</strong> - Track Title</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> Song Name</strong> - Track Title</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">⬇</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4" target="_blank" rel="noreferrer noopener">YouTube Video Pop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1975,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url($image_path_3) . '" alt="" class="wp-image-1975"/></figure>
<!-- /wp:image -->

<!-- wp:audio {"id":1974} -->
<figure class="wp-block-audio"><audio controls src="' . esc_url($audio_path_1) . '"></audio></figure>
<!-- /wp:audio --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"color-info"} -->
<div class="wp-block-columns has-color-info-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:embed {"url":"https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ","type":"rich","providerNameSlug":"spotify","allowResponsive":false,"responsive":true,"className":""} -->
<figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify"><div class="wp-block-embed__wrapper">
https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center">Spotify Stream Block</h5>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class=""><!-- wp:list-item -->
<li class="">Track Listing Song Name<br><strong>Featuring someone</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class="">Under Control<br><strong>Not Under Control</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class="">The October</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class="">Kids &amp; Knives<br><strong>Savile Remix</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class="">Out of Season (Acoustic)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class="">1981 (Demo)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class="">The November</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"color-success","style":{"border":{"radius":"25px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-success-color has-text-color wp-element-button" href="https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ" style="border-radius:25px">Listen on Spotify</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaId":1935,"mediaLink":"#","mediaType":"video","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)" id="tour-promo-video"><div class="wp-block-media-text__content"><!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Watch the tour promo video</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Content…","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">If you haven\'t, we highly recommend installing the C9 Blocks and C9 Admin Dashboard Plugins. <strong>For animations, and additional child theme features like a single page animated website, get on the C9 email list.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4" target="_blank" rel="noreferrer noopener">YouTube Video Pop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator --></div><figure class="wp-block-media-text__media"><video controls src="' . esc_url($video_path_1) . '"></video></figure></div>
<!-- /wp:media-text -->

<!-- wp:cover {"url":"' . esc_url($image_path_2) . '","id":1895,"dimRatio":50,"focalPoint":{"x":"0.49","y":"0.67"},"minHeight":849,"minHeightUnit":"px","contentPosition":"bottom center","align":"full","c9ContainerWidth":""} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:849px" id="tour-dates"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1895" src="' . esc_url($image_path_2) . '" style="object-position:49% 67%" data-object-fit="cover" data-object-position="49% 67%"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:image {"id":1955,"width":"60px","height":"auto","aspectRatio":"1","sizeSlug":"large","linkDestination":"none","className":"is-resized aligncenter"} -->
<figure class="wp-block-image size-large is-resized aligncenter"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-1955" style="aspect-ratio:1;width:60px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"wp-block-heading has-text-align-center has-large-font-size"} -->
<h1 class="wp-block-heading has-text-align-center has-large-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">TOUR – OF THE CENTURY</mark><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">told you we\'d be back</mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-inline-color has-color-light-color has-text-align-center","fontSize":"small"} -->
<p class="has-inline-color has-color-light-color has-text-align-center has-small-font-size">↓ SCROLL FOR THE DATES AND LISTEN TO THE JAMS WHILE YOU DO!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:embed {"url":"https://open.spotify.com/album/1EFnZuLUzXx0B6ZsL9aqum?si=mGx9OSaiSJ2T2GlAojjwDw","type":"rich","providerNameSlug":"spotify","allowResponsive":false,"responsive":true,"className":""} -->
<figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify"><div class="wp-block-embed__wrapper">
https://open.spotify.com/album/1EFnZuLUzXx0B6ZsL9aqum?si=mGx9OSaiSJ2T2GlAojjwDw
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"color":{"background":"#f7f7f7"}}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":35}}} -->
<h1 class="wp-block-heading" style="font-size:35px"><strong><span class="has-inline-color has-color-primary-color">C9</span></strong> — Tour Block Pattern</h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"23px"} -->
<div style="height:23px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Tickets on sale through a provider</h3>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p class=""><strong>Tickets and on-sale information would be great in here. </strong>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class=""><strong>Frequently asked questions would go great in here.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class="">Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class=""><strong>All content editing is done inline. </strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class="">Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class="">Have fun!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">GET TICKETS</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">ASK TIRESOME QUESTIONS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:table {"className":"is-style-stripes"} -->
<figure class="wp-block-table is-style-stripes"><table><thead><tr><th>Date</th><th>City</th><th class="has-text-align-center" data-align="center">Tickets</th></tr></thead><tbody><tr><td>6-7-2021</td><td>Chicago, IL</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>6-8-2021</td><td>Chicago, IL</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>6-14-2021</td><td>Savannah, GA</td><td class="has-text-align-center" data-align="center"><a href="">Buy Tickets</a></td></tr><tr><td>6-18-2021</td><td>Los Angeles, CA</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-1-2021</td><td>New York City!</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-12-2021</td><td>Paris, France</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-18-2021</td><td>Washington DC</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-31-2021</td><td>Chicago, IL</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr><tr><td>8-2-2021</td><td>Milwaukee, WI</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr><tr><td>8-4-2021</td><td>Portland, OR</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr><tr><td>8-6-2021</td><td>Seattle, WA</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"17px"} -->
<div style="height:17px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->';


		register_block_pattern(
			'c9-starter/c9-artist-social-profiles-promo',
			array(
				'title'			=> __('Artist Promo Links + Content', 'c9-starter'),
				'description' 	=> __('A template for a list of links plus a few videos and embeds to promote music or video.', 'c9-starter'),
				'content'		=> $c9_artist_promo_social_profiles_content,
				'categories'	=> array('COVERT NINE', 'header', 'buttons', 'text', 'landingpage')
			),
		);

		$c9_artist_promo_social_profiles_content_simp = '<!-- wp:cover {"url":"' . esc_url($image_path_8) . '","id":2789,"dimRatio":60,"overlayColor":"color-primary","minHeight":995,"minHeightUnit":"px","align":"full","style":{"color":[]},"c9ContainerWidth":""} -->
		<div class="wp-block-cover alignfull" style="min-height:995px"><span aria-hidden="true" class="wp-block-cover__background has-color-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2789" alt="" src="' . esc_url($image_path_8) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:image {"align":"center","id":3798,"width":"72px","height":"auto","aspectRatio":"1","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
		<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-3798" style="aspect-ratio:1;width:72px;height:auto"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Artist Promo Tree</mark></h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Advanced "Link tree" style layout with video sections + tour links</mark></p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":"10px"} -->
		<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:button {"backgroundColor":"color-light","width":50,"style":{"color":{"text":"#181818"},"elements":{"link":{"color":{"text":"#181818"}}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-color-light-background-color has-text-color has-background has-link-color wp-element-button" href="#stream-album" style="color:#181818">Stream Album</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"color-light","width":50,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color wp-element-button" href="#tour-dates">Tour Dates</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"c9music-dark-gray","textColor":"color-light","width":50,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-c-9-music-dark-gray-background-color has-text-color has-background wp-element-button" href="#tour-promo-video">Tour Promo Video</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"style":{"color":{"text":"#fefefe"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#new-music-video" style="color:#fefefe">New Music Video</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"color-light","width":50,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color wp-element-button" href="#">YouTube</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"style":{"color":{"text":"#bb9b6eeb"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#bb9b6eeb">Instagram</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"style":{"color":{"text":"#31ff00eb"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#31ff00eb">Spotify</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"style":{"color":{"text":"#ffffffeb"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffffeb">Apple Music</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"style":{"color":{"text":"#f9ff00eb"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#f9ff00eb">Merch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
		<!-- /wp:cover -->';

		register_block_pattern(
			'c9-starter/c9-artist-social-profiles',
			array(
				'title'			=> __('Artist Promo Links', 'c9-starter'),
				'description' 	=> __('A template for a list of links.', 'c9-starter'),
				'content'		=> $c9_artist_promo_social_profiles_content_simp,
				'categories'	=> array('COVERT NINE', 'header', 'buttons', 'text', 'landingpage')
			),
		);

		$c9_artist_promo_alt = '<!-- wp:cover {"url":"' . esc_url($image_path_9) . '","id":2789,"isRepeated":true,"dimRatio":30,"focalPoint":{"x":0.52,"y":1},"minHeight":995,"minHeightUnit":"px","gradient":"blush-light-purple","align":"full","style":{"color":[]},"c9ContainerWidth":""} -->
		<div class="wp-block-cover alignfull is-repeated" style="min-height:995px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim wp-block-cover__gradient-background has-background-gradient has-blush-light-purple-gradient-background"></span><div role="img" class="wp-block-cover__image-background wp-image-2789 is-repeated" style="background-position:52% 100%;background-image:url(' . esc_url($image_path_9) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:image {"align":"center","id":3798,"width":"72px","height":"auto","aspectRatio":"1","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
		<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-3798" style="aspect-ratio:1;width:72px;height:auto"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Artist Promo Tree</mark></h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">"Link tree" style layout with button links</mark> + a video background</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":"10px"} -->
		<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:button {"width":50,"style":{"color":{"background":"#141414"}}} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#141414">Stream Album</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"textColor":"color-light","width":50,"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color wp-element-button" href="#">Tour Dates</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"textColor":"color-light","width":50,"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-color-light-color has-text-color wp-element-button" href="#">Tour Promo Video</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#f4f4f4"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#f4f4f4">YouTube</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#c6ad89eb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#c6ad89eb">Instagram</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#31ff00eb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#31ff00eb">Spotify</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#ffffffeb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffffeb">Apple Music</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"width":50,"style":{"color":{"text":"#f9ff00eb"}},"className":"is-style-outline"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#f9ff00eb">Merch</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:cover -->';

		register_block_pattern(
			'c9-starter/c9-artist-social-profiles-alt',
			array(
				'title'			=> __('Artist Promo Links Alt', 'c9-starter'),
				'description' 	=> __('An artist promo template for a list of links.', 'c9-starter'),
				'content'		=> $c9_artist_promo_alt,
				'categories'	=> array('COVERT NINE', 'header', 'buttons', 'text', 'landingpage')
			),
		);

		$c9_spotify_track_core = '<!-- wp:columns {"backgroundColor":"color-info"} -->
<div class="wp-block-columns has-color-info-background-color has-background"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:embed {"url":"https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ","type":"rich","providerNameSlug":"spotify","allowResponsive":false,"responsive":true,"className":""} -->
<figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify"><div class="wp-block-embed__wrapper">
https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="has-text-align-left">Spotify Stream Block</h5>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Track Listing Song Name</li><li>Under Control</li><li>The October</li><li>Kids & Knives<br><strong>Savile Remix</strong></li><li>Out of Season (Acoustic)</li><li>1981 (Demo)</li><li>The November</li></ul>
<!-- /wp:list -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":25,"textColor":"color-success","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-success-color has-text-color" href="https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ" style="border-radius:25px">Listen on Spotify</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->';


		register_block_pattern(
			'c9-starter/c9-spotify-core',
			array(
				'title'			=> __('Spotify Embed, Track Listing + Button', 'c9-starter'),
				'description' 	=> __('Embed a playlist, track listing or lyrics, and a button to open it up!', 'c9-starter'),
				'content'		=> $c9_spotify_track_core,
				'categories'	=> array('COVERT NINE', 'Audio')
			),
		);

		$c9_podcast_embed_core = '<!-- wp:columns {"style":{"color":{"background":"#f3f3f3"}}} -->
<div class="wp-block-columns has-background" style="background-color:#f3f3f3"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-center has-large-font-size">♫ Episode 919 ♫<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-success-color">Don\'t listen to Pew-Pew.m4a</mark></h1>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","placeholder":"Content…","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">If you haven\'t, we highly recommend installing the <a href="#">C9 Blocks</a> and <a href="#">C9 Admin Dashboard Plugins</a>. <strong>For animations, and additional child theme features like a single page animated website, get on the C9 email list.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><strong><span class="has-inline-color has-color-secondary-background-color">✓</span></strong> Song Name</strong> - Track Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> Song Name</strong> - Track Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> Song Name</strong> - Track Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">⬇</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":19} -->
<div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.youtube.com/watch?v=8qyP5abkoe4" target="_blank" rel="noreferrer noopener">YouTube Video Pop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1975,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url($image_path_3) . '" alt="" class="wp-image-1975"/></figure>
<!-- /wp:image -->

<!-- wp:audio {"id":1974} -->
<figure class="wp-block-audio"><audio controls src="' . esc_url($audio_path_1) . '"></audio></figure>
<!-- /wp:audio --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->';

		register_block_pattern(
			'c9-starter/c9-podcast-embed-core',
			array(
				'title'			=> __('Podcast Episode', 'c9-starter'),
				'description' 	=> __('Feature a show photo, audio embed file, and everything you need for a podcast episode post.', 'c9-starter'),
				'keywords'		=> array('landing page', 'spotify', 'template', 'embed', 'audio'),
				'content'		=> $c9_podcast_embed_core,
				'categories'	=> array('COVERT NINE', 'Video', 'header', 'buttons', 'Audio', 'landingpage')
			),
		);

		$c9_events_schedule_core = '<!-- wp:cover {"url":"' . esc_url($image_path_2) . '","id":1895,"overlayColor":"c9music-black","focalPoint":{"x":"0.49","y":"0.67"},"minHeight":849,"minHeightUnit":"px","contentPosition":"bottom center","align":"full","className":"has-color-dark-background-color has-background-dim","c9ContainerWidth":"container-fluid","c9Align":"full"} -->
		<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center has-color-dark-background-color has-background-dim alignfull container-fluid" style="min-height:849px"><span aria-hidden="true" class="wp-block-cover__background has-c-9-music-black-background-color has-background-dim-100 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1895" alt="" src="' . esc_url($image_path_2) . '" style="object-position:49% 67%" data-object-fit="cover" data-object-position="49% 67%"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"66.67%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.67%"><!-- wp:image {"id":1955,"width":"66px","height":"auto","aspectRatio":"1","sizeSlug":"large","linkDestination":"none","className":"is-resized aligncenter"} -->
		<figure class="wp-block-image size-large is-resized aligncenter"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-1955" style="aspect-ratio:1;width:66px;height:auto"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"level":1,"className":"wp-block-heading has-text-align-center has-large-font-size"} -->
		<h1 class="wp-block-heading has-text-align-center has-large-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Event – OF THE CENTURY</mark><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">told you we\'d be back</mark></h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"className":"has-inline-color has-color-light-color has-text-align-center","fontSize":"small"} -->
		<p class="has-inline-color has-color-light-color has-text-align-center has-small-font-size">↓ SCROLL FOR THE DATES AND LISTEN TO THE JAMS WHILE YOU DO!</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:embed {"url":"https://open.spotify.com/album/1EFnZuLUzXx0B6ZsL9aqum?si=mGx9OSaiSJ2T2GlAojjwDw","type":"rich","providerNameSlug":"spotify","allowResponsive":false,"responsive":true,"className":""} -->
		<figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify"><div class="wp-block-embed__wrapper">
		https://open.spotify.com/album/1EFnZuLUzXx0B6ZsL9aqum?si=mGx9OSaiSJ2T2GlAojjwDw
		</div></figure>
		<!-- /wp:embed --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div></div>
		<!-- /wp:cover -->

<!-- wp:spacer {"height":17} -->
<div style="height:17px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"color":{"background":"#f7f7f7"}}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><div class="wp-block-group__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":35}}} -->
<h1 style="font-size:35px"><strong><span class="has-inline-color has-color-primary-color">C9</span></strong> — Events Block Pattern</h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":23} -->
<div style="height:23px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size">COVERT NINE - The nine essentials ingredients for good digital marketing. Copywriting, Design, Development, SEO, PPC, Social Media, Email, Videos, Photograph</h3>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><strong>Tickets and on-sale information would be great in here. </strong>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Frequently asked questions would go great in here.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>All content editing is done inline. </strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Have fun!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">GET TICKETS</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">ASK TIRESOME QUESTIONS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:table {"className":"is-style-stripes"} -->
<figure class="wp-block-table is-style-stripes"><table><thead><tr><th>Date</th><th>City</th><th class="has-text-align-center" data-align="center">Tickets</th></tr></thead><tbody><tr><td>6-7-2021</td><td>Chicago, IL</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>6-8-2021</td><td>Chicago, IL</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>6-14-2021</td><td>Savannah, GA</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>6-18-2021</td><td>Los Angeles, CA</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-1-2021</td><td>New York City!</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-12-2021</td><td>Paris, France</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-18-2021</td><td>Washington DC</td><td class="has-text-align-center" data-align="center"><a href="#">Buy Tickets</a></td></tr><tr><td>7-31-2021</td><td>Chicago, IL</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr><tr><td>8-2-2021</td><td>Milwaukee, WI</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr><tr><td>8-4-2021</td><td>Portland, OR</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr><tr><td>8-6-2021</td><td>Seattle, WA</td><td class="has-text-align-center" data-align="center">Coming soon!</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":35} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->';

		register_block_pattern(
			'c9-starter/c9-events-core',
			array(
				'title'			=> __('Events Schedule', 'c9-starter'),
				'description' 	=> __('Add a bunch of dates and places and links to a table with a nice header and FAQ, cause events are coming back!', 'c9-starter'),
				'keywords'		=> array('landing page', 'spotify', 'template', 'embed', 'audio', 'music', 'shows', 'schedule', 'table'),
				'content'		=> $c9_events_schedule_core,
				'categories'	=> array('COVERT NINE', 'text', 'header', 'buttons', 'Audio', 'landingpage')
			),
		);

		$c9_article_450_core = '<!-- wp:image {"align":"full","id":1908,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full"><img src="' . esc_url($image_path_2) . '" alt="" class="wp-image-1908"/><figcaption><strong>Full Width Image Block</strong> C9 Logo + Photo CC0.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":57} -->
<div style="height:57px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph -->
<p><strong>Author Name</strong><br>Author Title</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6} -->
<h6 class="has-has-color-dark-color has-text-color">December 16th, 2084</h6>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Dum velit laoreet id donec. In fermentum posuere urna nec tincidunt praesent. Amet purus gravida quis blandit turpis cursus in. Tincidunt tortor aliquam nulla facilisi. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Paragraphs inside of columns</strong>. Cras fermentum odio. Facilisi nullam vehicula ipsum a arcu cursus vitae. Id leo in vitae turpis massa sed elementum tempus. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. </p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eu volutpat odio facilisis mauris sit amet massa. </p><cite>No one actually said this--Tim</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:spacer {"height":48} -->
<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3>Heading inside of article</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eu volutpat odio facilisis mauris sit amet massa. Nec feugiat in fermentum posuere urna nec tincidunt. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In fermentum posuere urna nec. Velit scelerisque in dictum non consectetur a erat nam. Gravida dictum fusce ut placerat orci. Mattis molestie a iaculis at erat pellentesque adipiscing commodo. In eu mi bibendum neque egestas congue quisque egestas diam. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Vel fringilla est ullamcorper eget nulla. Lacinia at quis risus sed vulputate odio ut enim blandit. Ut pharetra sit amet aliquam id diam. Tristique nulla aliquet enim tortor at auctor. Justo nec ultrices dui sapien. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget. Dictum sit amet justo donec.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":2799,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url($image_path_4) . '" alt="" class="wp-image-2799"/><figcaption>Photo Caption</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"dropCap":true,"fontSize":"medium"} -->
<p class="has-drop-cap has-medium-font-size">Bring complex landing pages to life in minutes from section + page templates or build pages from scratch using C9 Grid and C9 Post Grid blocks. But, you can\'t do that if you don\'t download C9 Blocks when you install the C9 Theme.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":18}}} -->
<p style="font-size:18px">This layout uses core blocks from WordPress including columns, images, paragraphs, and more paragraphs!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Now go make your own theme!</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":3798,"width":51,"height":38,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-3798" width="51" height="38"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":2797,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url($image_path_5) . '" alt="" class="wp-image-2797"/><figcaption><strong>Photo Caption</strong></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eu volutpat odio facilisis mauris sit amet massa. Nec feugiat in fermentum posuere urna nec tincidunt. Quam pellentesque nec nam aliquam sem. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mauris augue neque gravida in fermentum et. Risus commodo viverra maecenas accumsan. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Elit eget gravida cum sociis natoque penatibus. Ullamcorper a lacus vestibulum sed arcu non odio euismod lacinia. Nec sagittis aliquam malesuada bibendum arcu vitae elementum. Id cursus metus aliquam eleifend mi in nulla posuere. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nec tincidunt praesent semper feugiat nibh sed pulvinar. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><strong>Share with your bestie</strong></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"align":"left"} -->
<ul class="wp-block-social-links alignleft"><!-- wp:social-link {"url":"facebook.com/covertnine","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com/covertnine","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://instagram.com/covertnine","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://github.com/covertnine","service":"github"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/company/10990511","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->';


		register_block_pattern(
			'c9-starter/c9-article-450-core',
			array(
				'title'			=> __('Article 450 Words', 'c9-starter'),
				'description' 	=> __('Get your article laid out before writing with a 450 word placeholder and some imagery to tet you started.', 'c9-starter'),
				'content'		=> $c9_article_450_core,
				'categories'	=> array('COVERT NINE', 'Article', 'text', 'header', 'columns', 'landingpage')
			),
		);

		$c9_article_600_core = '<!-- wp:cover {"url":"' . esc_url($image_path_1) . '","id":2789,"hasParallax":true,"dimRatio":60,"overlayColor":"color-primary","minHeight":772,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-60 has-color-primary-background-color has-background-dim has-parallax" style="background-image:url(' . esc_url($image_path_1) . ');min-height:772px"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">C9 Starter Article</mark></strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-color">Block Pattern</mark></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph -->
<p><strong>Author Name</strong><br>Author Title</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6} -->
<h6 class="has-has-color-dark-color has-text-color">December 16th, 2084</h6>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Dum velit laoreet id donec. In fermentum posuere urna nec tincidunt praesent. Amet purus gravida quis blandit turpis cursus in. Tincidunt tortor aliquam nulla facilisi. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Paragraphs inside of columns</strong>. Cras fermentum odio. Facilisi nullam vehicula ipsum a arcu cursus vitae. Id leo in vitae turpis massa sed elementum tempus. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Maecenas accumsan lacus vel facilisis volutpat. Arcu risus quis varius quam quisque. Semper feugiat nibh sed pulvinar. Molestie a iaculis at erat pellentesque. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Orci sagittis eu volutpat odio facilisis mauris sit. Senectus et netus et malesuada fames.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. </p>
<!-- /wp:paragraph -->

<!-- wp:pullquote -->
<figure class="wp-block-pullquote"><blockquote><p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eu volutpat odio facilisis mauris sit amet massa. </p><cite>No one actually said this--Tim</cite></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:spacer {"height":48} -->
<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"right","id":2792,"width":315,"height":209,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="alignright size-large is-resized"><img src="' . esc_url($image_path_6) . '" alt="" class="wp-image-2792" width="315" height="209"/><figcaption><strong>Photo is CC0 if you want <a href="https://www.flickr.com/photos/assaultshirts/50576944571/in/dateposted/">it</a>.</strong></figcaption></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>Heading inside of article</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eu volutpat odio facilisis mauris sit amet massa. Nec feugiat in fermentum posuere urna nec tincidunt. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In fermentum posuere urna nec. Velit scelerisque in dictum non consectetur a erat nam. Gravida dictum fusce ut placerat orci. Mattis molestie a iaculis at erat pellentesque adipiscing commodo. In eu mi bibendum neque egestas congue quisque egestas diam. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Vel fringilla est ullamcorper eget nulla. Lacinia at quis risus sed vulputate odio ut enim blandit. Ut pharetra sit amet aliquam id diam. Tristique nulla aliquet enim tortor at auctor. Justo nec ultrices dui sapien. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget. Dictum sit amet justo donec.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":28} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Now share this article or my boss will yell at me.</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"><!-- wp:image {"id":3798,"width":51,"height":38,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-3798" width="51" height="38"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:social-links {"align":"center"} -->
<ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"facebook.com/covertnine","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com/covertnine","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://instagram.com/covertnine","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://github.com/covertnine","service":"github"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/company/10990511","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->';


		register_block_pattern(
			'c9-starter/c9-article-600-core',
			array(
				'title'			=> __('Article 600 Words', 'c9-starter'),
				'description' 	=> __('Get your article laid out before writing with a 600 word placeholder and some imagery to tet you started.', 'c9-starter'),
				'content'		=> $c9_article_600_core,
				'categories'	=> array('COVERT NINE', 'Article', 'text', 'header', 'columns', 'landingpage')
			),
		);

		$c9_watch_video_core = '<!-- wp:cover {"url":"' . esc_url($video_path_1) . '","id":3697,"dimRatio":80,"overlayColor":"color-primary","backgroundType":"video","minHeight":995,"minHeightUnit":"px","align":"full","layout":{"type":"constrained","contentSize":"1140px"},"c9ContainerWidth":""} -->
		<div class="wp-block-cover alignfull is-light" style="min-height:995px"><span aria-hidden="true" class="wp-block-cover__background has-color-primary-background-color has-background-dim-80 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="' . esc_url($video_path_1) . '" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{"background":"#ededed"}}} -->
		<div class="wp-block-group has-background" style="background-color:#ededed"><!-- wp:image {"id":1955,"width":51,"height":38,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large aligncenter is-resized"><img src="' . esc_url($logo_path) . '" alt="" class="wp-image-1955" width="51" height="38"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#222222"}}} -->
		<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#222222">Watch the video to learn more.</h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","textColor":"color-primary","fontSize":"small"} -->
		<p class="has-text-align-center has-color-primary-color has-text-color has-small-font-size">Watch the video below to learn how to build page templates with C9 Blocks</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":"29px"} -->
		<div style="height:29px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4">Building Pages</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->';

		register_block_pattern(
			'c9-starter/c9-watch-video-core',
			array(
				'title'			=> __('Watch Video', 'c9-starter'),
				'description' 	=> __('Focus the page attention on a video button link, with an auto-playing video clip in the background.', 'c9-starter'),
				'content'		=> $c9_watch_video_core,
				'categories'	=> array('COVERT NINE', 'header', 'buttons', 'text', 'Video', 'landingpage')
			),
		);

		$c9_video_embed_core = '<!-- wp:media-text {"mediaPosition":"right","mediaId":1935,"mediaLink":"#","mediaType":"video"} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><video controls src="' . esc_url($video_path_1) . '"></video></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
		<h3>Using C9 Blocks Plugin</h3>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"placeholder":"Content...","fontSize":"small"} -->
		<p class="has-small-font-size">If you haven\'t, we highly recommend installing the C9 Blocks and C9 Admin Dashboard Plugins. <strong>For animations, and additional child theme features like a single page animated website, get on the C9 email list.</strong></p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons {"align":"center"} -->
		<div class="wp-block-buttons aligncenter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.youtube.com/watch?v=8qyP5abkoe4" target="_blank" rel="noreferrer noopener">YouTube Video Pop</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:media-text -->';

		register_block_pattern(
			'c9-starter/c9-video-embed-core',
			array(
				'title'			=> __('Video Embed + YouTube Link', 'c9-starter'),
				'description' 	=> __('Feature a video file you upload with a link to a YouTube video link.', 'c9-starter'),
				'content'		=> $c9_video_embed_core,
				'categories'	=> array('COVERT NINE', 'Video', 'header', 'buttons')
			),
		);

		$c9_information_dialog_core = '<!-- wp:group {"backgroundColor":"color-info"} -->
		<div class="wp-block-group has-color-info-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":1,"fontSize":"huge"} -->
		<h1 class="has-huge-font-size"><span class="has-inline-color has-color-danger-color"><strong>C9</strong></span> — Group Block</h1>
		<!-- /wp:heading -->
		
		<!-- wp:spacer {"height":50} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="has-medium-font-size">COVERT NINE - The nine essentials ingredients for good digital marketing. Copywriting, Design, Development, SEO, PPC, Social Media, Email, Videos, Photograph</h3>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph -->
		<p>Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra.&nbsp;Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra.&nbsp;Orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra.&nbsp;</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":50} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"align":"center"} -->
		<div class="wp-block-buttons aligncenter"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link">Learn More</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Contact Us</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		
		<!-- wp:spacer {"height":20} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div></div>
		<!-- /wp:group -->';

		register_block_pattern(
			'c9-starter/c9-information-dialog-core',
			array(
				'title'			=> __('Information Dialog Two Buttons', 'c9-starter'),
				'description' 	=> __('Highlight important information, and link to two separate places with buttons.', 'c9-starter'),
				'content'		=> $c9_information_dialog_core,
				'categories'	=> array('COVERT NINE', 'text', 'buttons')
			),
		);

		$c9_style_guide_core = '<!-- wp:cover {"url":"' . esc_url($image_path_7) . '","id":2805,"dimRatio":70,"minHeight":611,"minHeightUnit":"px","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"className":"is-light","c9ContainerWidth":""} -->
<div class="wp-block-cover alignfull is-light" style="margin-bottom:var(--wp--preset--spacing--70);min-height:611px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2805" alt="" src="' . esc_url($image_path_7) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"color-light","fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-color-light-color has-text-color has-huge-font-size"><mark style="background-color:rgba(0, 0, 0, 0);color:#fbfbfb" class="has-inline-color"><strong>Know where you\'re going?</strong><br>C9 Helper Style Guide</mark></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"align":"center","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"color-success","style":{"border":{"radius":"2px"}},"className":"is-style-c9-btn-green"} -->
<div class="wp-block-button is-style-c9-btn-green"><a class="wp-block-button__link has-color-success-background-color has-background wp-element-button" href="https://www.covertnine.com/form/c9-beta" style="border-radius:2px" target="_blank" rel="noreferrer noopener">Download now</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"2px"},"color":{"text":"#fbfbfb"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="https://youtube.com/covertnine" style="border-radius:2px;color:#fbfbfb">Tutorial Videos</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0);color:#f8f8f8\u0022 class=\u0022has-inline-color\u0022\u003eOr search through our archives\u003c/mark\u003e","placeholder":"How to design a signup page using C9 Blocks....","width":50,"widthUnit":"%","buttonText":"Search","align":"center"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Three calls to action so your visitors can pick their lane, and what they want to see next.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px">Ask a question</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Sign up for a newsletter or hit the most popular category of your shop.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px">Sign up for alerts</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Consider your three most popular user paths and use those links in these three buttons.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px">Buy Tickets</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">C9 Core Blocks Typography</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"color-secondary"} -->
<h1 class="has-text-align-center has-color-secondary-color has-text-color">Heading One</h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","textColor":"color-primary"} -->
<h2 class="has-text-align-center has-color-primary-color has-text-color">Heading Two</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"color-success"} -->
<h3 class="has-text-align-center has-color-success-color has-text-color">Heading Three</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"color-warning"} -->
<h4 class="has-text-align-center has-color-warning-color has-text-color">Heading Four</h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"color-danger"} -->
<h5 class="has-text-align-center has-color-danger-color has-text-color">Heading Five</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center">Heading Six</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center has-has-color-primary-color has-text-color"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-gray-color">Heading One</mark></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-yellow-color">Heading Two</mark></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-faded-green-color">Heading Three</mark></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-orange-color">Heading Four</mark></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-alt-green-color">Heading Five</mark></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-blue-color">Heading Six</mark></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>Small Font Paragraph. </strong>There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"dropCap":true,"fontSize":"normal"} -->
<p class="has-drop-cap has-normal-font-size">Pat enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><strong>Normal Font Paragraph. </strong>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong>Medium Font Paragraph. </strong>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><strong>Large Font Paragraph. </strong>Ut enim ad minim veniam, quis nostrud. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size"><strong>Large Font Paragraph. </strong>Ut enim ad minim veniam, quis. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6} -->
<h6>Ordered List</h6>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><li>List Item</li><li>List Item</li><li>There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin.</li><li>List Item</li></ol>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6} -->
<h6>Unordered List</h6>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>List Item</li><li>List Item</li><li>There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin.</li><li>List Item</li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center">Separators (HR)</h6>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator is-style-dots"/>
<!-- /wp:separator -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->';

		register_block_pattern(
			'c9-starter/c9-style-guide-core',
			array(
				'title'			=> __('C9 Starter Style Guide', 'c9-starter'),
				'description'	=> __('A style guide with type, buttons, and core blocks frequently used.', 'c9-starter'),
				'content'		=> $c9_style_guide_core,
				'categories'	=> array('COVERT NINE', 'Article', 'text', 'header', 'columns', 'landingpage')
			),
		);
	}
}
