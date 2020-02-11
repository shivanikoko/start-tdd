<?php

/**
 * 
 */

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
	public function testIfUserNameIsSet()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Shivani');

		$this->assertEquals($user->getFirstName(), 'Shivani');

	}
	
}