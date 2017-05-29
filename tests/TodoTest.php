<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TotoTest extends TestCase
{
  use DatabaseMigrations;
  private $id = 0;

  public function setup()
  {
    parent::setup();

    $todo = factory(\App\Todo::class)->create();
    // echo $todo;
    $this->id = $todo['id'];
  }

  /**
   * A basic test index.
   *
   * @return void
   */
  public function testIndex()
  {
    // $this->assertTrue(true);
    $response = $this->json('get','/api/todos');
    $this->seeJsonStructure($response, [
        '*' => [
          'id', 'status', 'title', 'created_at', 'updated_at'
        ]
      ]);
  }

  public function testShow()
  {
    // echo $this->id;

    $response = $this->json('get','/api/todos/' . $this->id);
    $this->seeJsonStructure($response,
        ['id', 'status', 'title', 'created_at', 'updated_at']
      );
  }
}
