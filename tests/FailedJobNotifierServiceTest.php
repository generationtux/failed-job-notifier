<?php

use GenTux\FailedJobNotifier\FailedJobNotifierService;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\TestCase;

class FailedJobNotifierServiceTest extends TestCase
{
	/**
     * @var Mockery\Mock
     */
	protected $app;
	
	/**
     * @var ServiceProvider
     */
	protected $provider;
	
	protected function setUp()
	{
		parent::setUp();
		
		$this->setUpMocks();
		
		$this->provider = new FailedJobNotifierService($this->app);
	}
	
	protected function setUpMocks()
    {
        $this->app = Mockery::mock(Application::class);
    }
	
	/**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(FailedJobNotifierService::class, $this->provider);
    }
	
	/**
     * @test
     */
    public function it_does_nothing_in_the_register_method()
    {
        $this->assertNull($this->provider->register());
    }
	
	/**
     * @test
     */
    public function it_does_boot()
    {
		Queue::spy();
		
		$this->provider->boot();
    }
}