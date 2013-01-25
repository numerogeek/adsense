<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Adsense Widget
 * @author			Geoffrey Monte
 *
 * Show custom string in your site
 */

class Widget_Adsense extends Widgets
{
	public $title		= 'Adsense';
	public $description	= array(
		'en' => 'Display Google Adsense on your website',
	);
	public $author		= 'Geoffrey Monte';
	public $website		= 'http://www.pyrocms.fr/';
	public $version		= '1.0';
	
	public $fields = array(
		array(
			'field' => 'google_ad_client',
			'label' => 'google_ad_client',
			'rules' => 'required'
		),
		array(
			'field' => 'google_ad_slot',
			'label' => 'google_ad_slot',
			'rules' => 'numeric'
		),
		array(
			'field' => 'google_ad_width',
			'label' => 'google_ad_width',
			'rules' => 'numeric'
		),
		array(
			'field' => 'google_ad_height',
			'label' => 'google_ad_height',
			'rules' => 'numeric'
		)
	);

	public function run($options)
	{
		if (empty($options))
		{
				return array(
			'google_ad_client' => "",
			'google_ad_slot' => "",
			'google_ad_width' =>"",
			'google_ad_height' => "",
		);
		}

		$google_script=false;
		if(!isset($script_adsense))
		{
		$script_adsense=true;
		$google_script=true; 
		}
				return array(
			'google_ad_client' => $options['google_ad_client'],
			'google_ad_slot' => $options['google_ad_slot'],
			'google_ad_width' => $options['google_ad_width'],
			'google_ad_height' => $options['google_ad_height'],
			'google_script'		=> $google_script
		);
	}	
}
