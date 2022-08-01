<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;

class ِDataAvailabilityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_employee_free_date_time()
    {
		
		$response = $this->call('POST','/search',[
			'id' => "57646786307395936680161735716561753784",
			'date' => '2015-03-02 08:00:00'
		]);
		
	$response->assertStatus($response->status(),302);	

    }
}
