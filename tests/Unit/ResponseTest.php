<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResponseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testResponse()
    {
      // $this->assertTrue(true);

      $response = $this->json('POST','testPost',['name'=>'Danijel']);

      $response->assertStatus(201)
      ->assertJson(['post_status'=>'created']);
    }

}
