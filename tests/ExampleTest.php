<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function testBasicExample()
  {
//    $this->browse(function ($browser) {
//      $browser->visit('/')
//        ->assertSee('Laravel 5');
//    });
    $response = $this->get('/');

    $response->assertStatus(200);
  }
}
