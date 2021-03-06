<?php defined('ABSPATH') or die("you do not have access to this page!"); ?>

<?php

$plugins = array(
	'WPSI' => array(
		'constant_free' => 'wpsi_plugin',
		'constant_premium' => 'wpsi_pro_plugin',
		'website' => 'https://wpsearchinsights.com/pro',
		'search' => 'WP+Search+Insights+really+simple+plugins+searches+complianz',
	),
	'COMPLIANZ' => array(
		'constant_free' => 'cmplz_plugin',
		'constant_premium' => 'cmplz_premium',
		'website' => 'https://complianz.io/pricing',
		'search' => 'complianz+really+simple+cookies+rogierlankhorst',
	),
	'ZIP' => array(
		'constant_free' => 'ZRDN_PLUGIN_BASENAME',
		'constant_premium' => 'ZRDN_PREMIUM',
		'website' => 'https://ziprecipes.net/premium/',
		'search' => 'zip+recipes+recipe+maker+really+simple+plugins+complianz',
	),
);
?>
<div>
	<div class="rsssl-upsell rsssl-wpsi">
		<div class="plugin-color">
			<div class="wpsi-red rsssl-bullet"></div>
		</div>
		<div class="plugin-text">
			<a href="https://wordpress.org/plugins/wp-search-insights/" target="_blank"><?php _e("WP Search Insights - Track searches on your website")?></a>
		</div>
		<div class="plugin-status">
			<?php echo RSSSL()->really_simple_ssl->get_status_link($plugins['WPSI'])?>
		</div>
	</div>
	<div class="rsssl-upsell rsssl-cmplz">
		<div class="plugin-color">
			<div class="cmplz-blue rsssl-bullet"></div>
		</div>
		<div class="plugin-text">
			<a href="https://wordpress.org/plugins/complianz-gdpr/" target="_blank"><?php _e("Complianz Privacy Suite - Consent Management as it should be ", "really-simple-ssl")?></a>
		</div>
		<div class="plugin-status">
			<?php echo RSSSL()->really_simple_ssl->get_status_link($plugins['COMPLIANZ'])?>
		</div>
	</div>
	<div class="rsssl-upsell rsssl-zip">
		<div class="plugin-color">
			<div class="zip-pink rsssl-bullet"></div>
		</div>
		<div class="plugin-text"><a href="https://wordpress.org/plugins/zip-recipes/" target="_blank">
				<?php _e("Zip Recipes - Beautiful recipes optimized for Google ", "really-simple-ssl")?></a>
		</div>
		<div class="plugin-status">
			<?php echo RSSSL()->really_simple_ssl->get_status_link($plugins['ZIP'])?>
		</div>
	</div>
</div>