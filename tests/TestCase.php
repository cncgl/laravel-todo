<?php

//class TestCase extends Illuminate\Foundation\Testing\TestCase
//{
//    /**
//     * The base URL to use while testing the application.
//     *
//     * @var string
//     */
//    protected $baseUrl = 'http://localhost';
//
//    /**
//     * Creates the application.
//     *
//     * @return \Illuminate\Foundation\Application
//     */
//    public function createApplication()
//    {
//        $app = require __DIR__.'/../bootstrap/app.php';
//
//        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
//
//        return $app;
//    }
//}

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\TestResponse;

abstract class TestCase extends BaseTestCase
{
  use CreatesApplication;

  /**
   * 後方互換メソッド
   * @param TestResponse|null $response
   * @param array|null $structure
   * @param null $responseData
   * @return $this
   */
  public function seeJsonStructure(TestResponse $response = null, array $structure = null, $responseData = null)
  {
    if ($response && !$responseData) {
      $responseData = $response->decodeResponseJson();
    }
    if (is_null($structure)) {
      return $response->assertJson($responseData);
    }
    foreach ($structure as $key => $value) {
      if (is_array($value) && $key === '*') {
        $this->assertInternalType('array', $responseData);
        foreach ($responseData as $responseDataItem) {
          $this->seeJsonStructure(null, $structure['*'], $responseDataItem);
        }
      } elseif (is_array($value)) {
        $this->assertArrayHasKey($key, $responseData);
        $this->seeJsonStructure(null, $structure[$key], $responseData[$key]);
      } else {
        $this->assertArrayHasKey($value, $responseData);
      }
    }
    return $this;
  }
}
