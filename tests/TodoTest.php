<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TotoTest extends TestCase
{
  use DatabaseMigrations;

  public function setup()
  {
    parent::setup();

    $todo = factory(\App\Todo::class)->create();
    echo $todo;

  }

  /**
   * A basic test index.
   *
   * @return void
   */
  public function testIndex()
  {
    // $this->assertTrue(true);
    $this->get('/api/todos')
      ->seeJsonStructure([
        '*' => [
          'id', 'status', 'title', 'created_at', 'updated_at'
        ]
      ]);

  }
}
