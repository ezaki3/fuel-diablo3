<?php

namespace Diablo3;

class Model_Diablo3 extends \Model
{
	protected static $base_url = 'http://us.battle.net/';

	protected static function get_data($api_path = null)
	{
		$url = static::$base_url.$api_path;
		$result = \Request::forge($url, 'curl')->execute()->response();
		return \Format::forge($result->body, 'json')->to_array();
	}

	public static function get_career($battletag_name = null, $battletag_code = null)
	{
		return static::get_data('api/d3/profile/'.$battletag_name.'-'.$battletag_code.'/');
	}

	public static function get_hero($battletag_name = null, $battletag_code = null, $hero_id = null)
	{
		return static::get_data('api/d3/profile/'.$battletag_name.'-'.$battletag_code.'/hero/'.$hero_id);
	}

	public static function get_item($item_data = null)
	{
		return static::get_data('api/d3/data/item/'.$item_data);
	}

	public static function get_follower($follower_type = null)
	{
		return static::get_data('api/d3/data/follower/'.$follower_type);
	}

	public static function get_artisan($artisan = null)
	{
		return static::get_data('api/d3/data/artisan/'.$artisan);
	}
}
