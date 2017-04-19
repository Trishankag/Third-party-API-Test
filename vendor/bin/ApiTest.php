<?php
include_once("../autoload.php"); 
//echo file_get_contents("http://localhost/testingapi/vendor/autoload.php"); 
class ApiTest extends PHPUnit_Framework_TestCase
{
    protected $client;

    protected function setUp()
    {
		 $this->http = new GuzzleHttp\Client(['base_uri' => 'http://samples.openweathermap.org']);
    }

    public function testGet()
    {
		
		
			 $response = $this->http->request('GET', '/data/2.5/weather?q=London,uk&appid=b1b15e88fa797225412429c1c50c122a1 ');
    $this->assertEquals(200, $response->getStatusCode());
     $data = json_decode($response->getBody(), true);
	 print_r($data);
	 print_r ($data['coord']['lon']);
	 $this->assertArrayHasKey('coord', $data);

        
    }
	
	
}

?>