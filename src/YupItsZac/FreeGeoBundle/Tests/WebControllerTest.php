<?php

namespace YupItsZac\FreeGeoBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WebControllerTest extends WebTestCase {

    private $client;

    public function setUp() {
        $this->client = static::createClient();
    }

    public function testIndexPage() {

        $crawler = $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Easy. Reliable. Free. Open Source.")')->count());
    }

    public function testStatusPage() {
        $crawler = $this->client->request('GET', '/status');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("API Status Report")')->count());
    }

    public function testRegisterPage() {

        $crawler = $this->client->request('GET', '/status');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("API Status Report")')->count());
    }

    public function testDocsHomePage() {

        $crawler = $this->client->request('GET', '/docs');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Documentation")')->count());
    }

    public function testDocsAuthenticate() {

        $crawler = $this->client->request('GET', '/docs/authenticate');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Session Authentication")')->count());
    }

    public function testDocsDistanceCalculation() {

        $crawler = $this->client->request('GET', '/docs/requests/calculate/distance');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Distance Calculation")')->count());
    }

    public function testDocsDetectTimezone() {

        $crawler = $this->client->request('GET', '/docs/requests/detect/timezone');

        $this->assertGreaterThan(0, $crawler->filter('html:contains("Timezone Detection")')->count());
    }

    public function testDocsFindNearCities() {

        $crawler = $this->client->request('GET', '/docs/requests/find-near/cities');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Nearest Cities")')->count());
    }

    public function testDocsFindNearPorts() {

        $crawler = $this->client->request('GET', '/docs/requests/find-near/ports');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Nearest Ports")')->count());
    }

    public function testDocsFindNearAirports() {

        $crawler = $this->client->request('GET', '/docs/requests/find-near/airports');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Nearest Airports")')->count());
    }

    public function testLoginPage() {

        $crawler = $this->client->request('GET', '/login');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Developer Login")')->count());
    }
}
