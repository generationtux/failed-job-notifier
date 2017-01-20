<?php GenTux\FailedJobNotifier\Tests;

use GenTux\FailedJobNotifier\FailedJobNotifierService

class FailedJobNotifierServiceTest extends TestCase
{
	public function setUp()
	{
		parent::setUp();
		
		app()->register(FailedJobNotifierService::class);
	}
}