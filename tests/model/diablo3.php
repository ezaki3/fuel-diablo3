<?php

/**
 * @group Diablo3
 */
class Test_Model_Diablo3 extends TestCase
{
	public function test_get_career()
	{
		$result = Diablo3\Model_Diablo3::get_career('masaru3', 1319);
		$expected = 'masaru3#1319';
		$this->assertEquals($expected, $result['battleTag']);
	}

	public function test_get_hero()
	{
		$result = Diablo3\Model_Diablo3::get_hero('masaru3', 1319, 803861);
		$expected = 803861;
		$this->assertEquals($expected, $result['id']);
	}

	public function test_get_item()
	{
		$result = Diablo3\Model_Diablo3::get_item('COGHsoAIEgcIBBXIGEoRHYQRdRUdnWyzFB2qXu51MA04kwNAAFAKYJMD');
		$expected = 'MightyWeapon1H_202';
		$this->assertEquals($expected, $result['id']);
	}

	public function test_get_follower()
	{
		$result = Diablo3\Model_Diablo3::get_follower('templar');
		$expected = 'Templar';
		$this->assertEquals($expected, $result['name']);
	}

	public function test_get_artisan()
	{
		$result = Diablo3\Model_Diablo3::get_artisan('blacksmith');
		$expected = 'Blacksmith';
		$this->assertEquals($expected, $result['name']);
	}
}
