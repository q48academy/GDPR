<?php

use PHPUnit\Framework\TestCase;
use Q48academy\Gdpr\Gdpr;

/**
 * @backupGlobals enabled
 */
class GdprTest extends TestCase
{
	// test Data UserAgents
	// 'raw' => 'expected'
	private $userAgents = [
		// GoogleBot
		// https://support.google.com/webmasters/answer/1061943?hl%3Den

		'APIs-Google (+https://developers.google.com/webmasters/APIs-Google.html)' => 'APIs-Google (+https://developers.google.com/webmasters/APIs-Google.html)',
		'Mediapartners-Google' => 'Mediapartners-Google',
		'Mozilla/5.0 (Linux; Android 5.0; SM-G920A) AppleWebKit (KHTML, like Gecko) Chrome Mobile Safari (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)' => 'Mozilla/5.0 (Linux; Android 5.0; SM-G920A) AppleWebKit (KHTML, like Gecko) Chrome Mobile Safari (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)',
		'Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1 (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1 (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)',
		'AdsBot-Google (+http://www.google.com/adsbot.html)' => 'AdsBot-Google (+http://www.google.com/adsbot.html)',
		'Googlebot-Image/1.0' => 'Googlebot-Image/1.0',
		'Googlebot-News' => 'Googlebot-News',
		'Googlebot-Video/1.0' => 'Googlebot-Video/1.0',
		'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
		'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/W.X.Y.Z Safari/537.36' => 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/W.X.Y.Z Safari/537.36',
		'Googlebot/2.1 (+http://www.google.com/bot.html)' => 'Googlebot/2.1 (+http://www.google.com/bot.html)',
		'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)' => 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
		'AdsBot-Google-Mobile-Apps' => 'AdsBot-Google-Mobile-Apps',
		'Feedfetcher-Google; (+http://www.google.com/feedfetch.html)' => 'Feedfetcher-Google; (+http://www.google.com/feedfetch.html)',
		'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)',
		'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012; DuplexWeb-Google/1.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Mobile Safari/537.36' => 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012; DuplexWeb-Google/1.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Mobile Safari/537.36',
		'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 Google Favicon' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 Google Favicon',

		// Firefox
		// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent/Firefox
		'Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion' => 'Mozilla/5.0 (platform; rv:geckoversion) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Android 4.4; Mobile; rv:41.0) Gecko/41.0 Firefox/41.0' => 'Mozilla/5.0 (Android; Mobile;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Android 4.4; Mobile; rv:42.0) Gecko/41.0 Firefox/41.0' => 'Mozilla/5.0 (Android; Mobile;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Android 4.4; Tablet; rv:41.0) Gecko/41.0 Firefox/41.0' => 'Mozilla/5.0 (Android; Tablet;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Windows NT 6.1; rv:10.0) Gecko/20100101 Firefox/10.0' => 'Mozilla/5.0 (Windows;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:10.0) Gecko/20100101 Firefox/10.0' => 'Mozilla/5.0 (Windows;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:10.0) Gecko/20100101 Firefox/10.0' => 'Mozilla/5.0 (Macintosh; Mac OS X) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Macintosh; PPC Mac OS X 10.1.1; rv:10.0) Gecko/20100101 Firefox/10.0' => 'Mozilla/5.0 (Macintosh; Mac OS X) Gecko/0 Firefox/0',
		'Mozilla/5.0 (X11; Linux i686; rv:10.0) Gecko/20100101 Firefox/10.0' => 'Mozilla/5.0 (X11; Linux;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20100101 Firefox/10.0' => 'Mozilla/5.0 (X11; Linux;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Maemo; Linux armv7l; rv:10.0) Gecko/20100101 Firefox/10.0 Fennec/10.0' => 'Mozilla/5.0 (Linux;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Android; Mobile; rv:40.0) Gecko/40.0 Firefox/40.0' => 'Mozilla/5.0 (Android; Mobile;) Gecko/0 Firefox/0',
		'Mozilla/5.0 (Android; Tablet; rv:40.0) Gecko/40.0 Firefox/40.0' => 'Mozilla/5.0 (Android; Tablet;) Gecko/0 Firefox/0',
		/*
		'Mozilla/5.0 (Linux; Android 7.0) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/1.0 Chrome/59.0.3029.83 Mobile Safari/537.36' => '',
		'Mozilla/5.0 (Linux; Android 7.0) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/1.0 Chrome/59.0.3029.83 Safari/537.36' => '',
		'Mozilla/5.0 (Android 7.0; Mobile; rv:62.0) Gecko/62.0 Firefox/62.0' => '',
		'Mozilla/5.0 (Linux; Android 7.0) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Klar/1.0 Chrome/58.0.3029.83 Mobile Safari/537.36' => '',
		'Mozilla/5.0 (Linux; Android 7.0) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/4.1 Chrome/62.0.3029.83 Mobile Safari/537.36' => '',
		'Mozilla/5.0 (Android 7.0; Mobile; rv:62.0) Gecko/62.0 Firefox/62.0' => '',
		'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/7.0.4 Mobile/16B91 Safari/605.1.15' => '',
		'Mozilla/5.0 (Linux; Android 7.1.2) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/3.0 Chrome/59.0.3017.125 Safari/537.36' => '',
		'Mozilla/5.0 (Linux; Android 5.1.1) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/1.1 Chrome/59.0.3017.125 Safari/537.36' => '',
		'Mozilla/5.0 (Mobile; rv:26.0) Gecko/26.0 Firefox/26.0' => '',
		'Mozilla/5.0 (Tablet; rv:26.0) Gecko/26.0 Firefox/26.0' => '',
		'Mozilla/5.0 (TV; rv:44.0) Gecko/44.0 Firefox/44.0' => '',
		'Mozilla/5.0 (iPod touch; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) FxiOS/1.0 Mobile/12F69 Safari/600.1.4' => '',
		'Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) FxiOS/1.0 Mobile/12F69 Safari/600.1.4' => '',
		'Mozilla/5.0 (iPad; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) FxiOS/1.0 Mobile/12F69 Safari/600.1.4' => '',
		'Mozilla/5.0 (Maemo; Linux armv7l; rv:10.0.1) Gecko/20100101 Firefox/10.0.1 Fennec/10.0.1' => '',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.5; rv:2.0.1) Gecko/20100101 Firefox/4.0.1 Camino/2.2.1' => '',
		'Mozilla/5.0 (Windows NT 5.2; rv:10.0.1) Gecko/20100101 Firefox/10.0.1 SeaMonkey/2.7.1' => '',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.5; rv:10.0.1) Gecko/20100101 Firefox/10.0.1 SeaMonkey/2.7.1' => '',
		'Mozilla/5.0 (X11; Linux i686; rv:10.0.1) Gecko/20100101 Firefox/10.0.1 SeaMonkey/2.7.1' => '',
		'' => '',
		'' => '',
		'' => '',
		'' => '',
		*/
	];

	public function testInstantiationOfGDPR()
	{
		$obj = new Gdpr();
		$this->assertInstanceOf('\Q48academy\Gdpr\Gdpr', $obj);
	}

	///
	/// WIPE
	///

	public function testWipeIp()
	{
		// without server key
		$index = Gdpr::SERVER_KEY_IP;
		$start = '127.0.0.1';
		$expected = '0.0.0.0';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );
		Gdpr::wipeIp();
		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );

		// with server key

		$index = 'TEST_REMOTE_ADDR';
		$start = '127.0.0.1';
		$expected = '0.0.0.0';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );
		Gdpr::wipeIp( $index );
		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );

	}

	public function testWipeUserAgent()
	{

		$index = Gdpr::SERVER_KEY_USER_AGENT;
		$start = 'Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion';
		$expected = '';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );
		Gdpr::wipeUserAgent();
		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );
	}

	public function testWipeReferer()
	{

		$index = Gdpr::SERVER_KEY_REFERER;
		$start = 'https://www.example.com';
		$expected = '';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );
		Gdpr::wipeReferrer();
		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );
	}

	public function testWipeQueryString()
	{

		// QUERY
		$index = Gdpr::SERVER_KEY_QUERY;
		$start = 'a=1&b=2';
		$expected = '';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );
		Gdpr::wipeQueryString();
		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );

		// URI
		$index = Gdpr::SERVER_KEY_URI;
		$start = 'https://www.example.com?a=1&b=2';
		$expected = 'https://www.example.com';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );
		Gdpr::wipeQueryString();
		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );

		// GET
		$start = ['a'=>1,'b'=>2];
		$expected = [];

		$_GET = $start;
		$this->assertEquals( $start , $_GET );
		Gdpr::wipeQueryString();
		$this->assertEquals( $expected, $_GET );

	}

	///
	/// Anon
	///
	public function testKeys()
	{

		$Gdpr = new Gdpr();
		if( !$Gdpr->hasKey(Gdpr::CRYPTO_KEY_LOCAL,Gdpr::CRYPTO_KEY_PRIVATE,Gdpr::CRYPTO_KEY_ENCRYPTION) ){
			$Gdpr->generateKeys();
		}
		$this->assertTrue(true);

	}

	public function testSetAnonIp()
	{

		$Gdpr = new Gdpr();

		// v4
		$index = Gdpr::SERVER_KEY_IP;
		$start = '1.2.3.4';
		$expected = [
			'1' => '1.2.3.0',
			'2' => '1.2.0.0',
			'3' => '1.0.0.0',
			'4' => '0.0.0.0',
		];

		foreach ($expected as $v4 => $v4expected) {

			$_SERVER[$index] = $start;
			$this->assertEquals( $start , $_SERVER[$index] );

			$Gdpr->setAnonIp([
				'v4' => $v4,
			]);

			$this->assertEquals( $v4expected, $_SERVER[$index] );

			Gdpr::cleanup( $index );
		}

		// v6
		$index = Gdpr::SERVER_KEY_IP;
		$start = '1:2:3:4:5:6:7:8';
		$expected = [
			'1' => '1:2:3:4:5:6:7:0',
			'2' => '1:2:3:4:5:6:0:0',
			'3' => '1:2:3:4:5:0:0:0',
			'4' => '1:2:3:4:0:0:0:0',
			'5' => '1:2:3:0:0:0:0:0',
			'6' => '1:2:0:0:0:0:0:0',
			'7' => '1:0:0:0:0:0:0:0',
			'8' => '0:0:0:0:0:0:0:0',
		];

		foreach ($expected as $v6 => $v6expected) {

			$_SERVER[$index] = $start;
			$this->assertEquals( $start , $_SERVER[$index] );

			$Gdpr->setAnonIp([
				'v6' => $v6,
			]);

			$this->assertEquals( inet_ntop(inet_pton($v6expected)), $_SERVER[$index] );

			Gdpr::cleanup( $index );
		}

		// encryption


	}

	public function testGetAnonIp()
	{
		$Gdpr = new Gdpr();

		$start = '1.2.3.4';
		$index = Gdpr::SERVER_KEY_IP;
		$expected = '1.2.3.0';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anonIp = $Gdpr->getAnonIp([
			'rawIp' => $start
		]);

		$this->assertNotEquals( $start, $anonIp );
		$this->assertEquals( $expected, $anonIp );


		Gdpr::cleanup( $index );
	}

	public function testGetRawIp()
	{
		$Gdpr = new Gdpr();

		$start = '1.2.3.4';
		$index = Gdpr::SERVER_KEY_IP;

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonIp([
			'rawIp' => $start,
			'doEncrypt' => true
		]);

		$rawIp = $Gdpr->getRawIp(
			Gdpr::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
			Gdpr::DATA_CATEGORY_DEFAULT,
			Gdpr::PROCESS_REASON_READ,
			__CLASS__ . '->' . __FUNCTION__

		);
		$this->assertEquals( $start, $rawIp );

		Gdpr::cleanup( $index );

	}


	public function testSetAnonUA()
	{

		$Gdpr = new Gdpr();

		// data
		$index = Gdpr::SERVER_KEY_USER_AGENT;

		foreach ($this->userAgents as $start => $expected) {

			if(empty($start)) continue;
			#echo $start . " == " .  $expected . "\n";

			$_SERVER[$index] = $start;
			$this->assertEquals( $start , $_SERVER[$index] , 'check start value (exp) to server value (act)');

			$Gdpr->setAnonUserAgent();

			$this->assertEquals( $expected, $_SERVER[$index] ,'check exp to server value (act)' );

			Gdpr::cleanup( $index );

		}



	}

	public function testGetAnonUA()
	{
		$Gdpr = new Gdpr();

		$index = Gdpr::SERVER_KEY_USER_AGENT;

		foreach ($this->userAgents as $start => $expected) {

			if(empty($start)) continue;

			$_SERVER[$index] = $start;
			$this->assertEquals( $start , $_SERVER[$index] );

			$anon = $Gdpr->getAnonUserAgent([
			]);

			#$this->assertNotEquals( $start, $anon );
			$this->assertEquals( $expected, $anon );

			Gdpr::cleanup( $index );
		}

	}

	public function testGetRawUA()
	{
		$Gdpr = new Gdpr();

		$start = 'Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405';
		$index = Gdpr::SERVER_KEY_USER_AGENT;

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonUserAgent([
			'doEncrypt' => true
		]);

		$raw = $Gdpr->getRawUserAgent(
			Gdpr::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
			Gdpr::DATA_CATEGORY_DEFAULT,
			Gdpr::PROCESS_REASON_READ,
			__CLASS__ . '->' . __FUNCTION__
		);
		$this->assertEquals( $start, $raw );

		Gdpr::cleanup( $index );

	}


	public function testSetAnonReferrer()
	{

		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_REFERER;
		$start = 'http://www.example.com/path?a=1&b=2';

		// default
		$expected = 'http://www.example.com';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonReferrer([
		]);

		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );


		// whitelist
		$expected = 'http://www.example.com/path?a=1&b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonReferrer([
			'whitelist' => ['www.example.com'],
		]);

		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );

	}

	public function testGetAnonReferrer()
	{
		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_REFERER;
		$start = 'http://www.example.com/path?a=1&b=2';

		// default
		$expected = 'http://www.example.com';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonReferrer([]);

		$this->assertNotEquals( $start, $anon );
		$this->assertEquals( $expected, $anon );

		Gdpr::cleanup( $index );


		// whitelist
		$start 		= 'http://www.example.com/path?a=3&b=4';
		$expected 	= $start;

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonReferrer([
			'whitelist' => ['www.example.com'],
		]);

		$this->assertEquals( $expected, $anon );
		Gdpr::cleanup( $index );

	}

	public function testGetRawReferrer()
	{
		$Gdpr = new Gdpr();

		$index = Gdpr::SERVER_KEY_REFERER;
		$start = 'http://www.example.com/path?a=1&b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonReferrer([
			'doEncrypt' => true
		]);

		$raw = $Gdpr->getRawReferrer(
			Gdpr::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
			Gdpr::DATA_CATEGORY_DEFAULT,
			Gdpr::PROCESS_REASON_READ,
			__CLASS__ . '->' . __FUNCTION__
		);
		$this->assertEquals( $start, $raw );

		Gdpr::cleanup( $index );

	}


	public function testSetAnonQueryString()
	{

		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_QUERY;
		$start = 'a=1&b=2';

		// default
		$expected = '';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonQueryString();

		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );


		// whitelist
		$expected = 'b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonQueryString([
			'whitelist' => ['b'],
		]);

		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );


	}

	public function testGetAnonQueryString()
	{
		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_QUERY;
		$start = 'a=1&b=2';

		// default
		$expected = '';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonQueryString();

		$this->assertEquals( $expected, $anon );

		Gdpr::cleanup( $index );


		// whitelist
		$expected = 'b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonQueryString([
			'whitelist' => ['b'],
		]);

		$this->assertNotEquals( $start, $anon );
		$this->assertEquals( $expected, $anon );

		Gdpr::cleanup( $index );

	}

	public function testGetRawQueryString()
	{


		$Gdpr = new Gdpr();

		$index = Gdpr::SERVER_KEY_QUERY;
		$start = 'a=1&b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonQueryString([
				'doEncrypt' => true

			]
		);

		$raw = $Gdpr->getRawQueryString(
			Gdpr::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
			Gdpr::DATA_CATEGORY_DEFAULT,
			Gdpr::PROCESS_REASON_READ,
			__CLASS__ . '->' . __FUNCTION__
		);
		$this->assertEquals( $start, $raw );

		Gdpr::cleanup( $index );

	}



	public function testSetAnonRequestUri()
	{

		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_URI;
		$start = '/path?a=1&b=2';

		// default
		$expected = '/path';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonRequestUri();

		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );


		// whitelist
		$expected = '/path?b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonRequestUri([
			'whitelist' => ['b'],
		]);

		$this->assertEquals( $expected, $_SERVER[$index] );

		Gdpr::cleanup( $index );

	}

	public function testGetAnonRequestUri()
	{
		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_URI;
		$start = '/path?a=1&b=2';

		// default
		$expected = '/path';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonRequestUri([]);

		$this->assertNotEquals( $start, $anon );
		$this->assertEquals( $expected, $anon );

		Gdpr::cleanup( $index );


		// whitelist
		$start 		= '/path?a=3&b=4';
		$expected 	= '/path?b=4';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonRequestUri([
			'whitelist' => ['b'],
		]);

		$this->assertEquals( $expected, $anon );
		Gdpr::cleanup( $index );

	}

	public function testGetRawRequestUri()
	{
		$Gdpr = new Gdpr();

		$index = Gdpr::SERVER_KEY_URI;
		$start = 'http://www.example.com/path?a=1&b=2';

		$_SERVER[$index] = $start;
		$this->assertEquals( $start , $_SERVER[$index] );

		$Gdpr->setAnonRequestUri([
			'doEncrypt' => true

		]);

		$raw = $Gdpr->getRawRequestUri(
			Gdpr::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
			Gdpr::DATA_CATEGORY_DEFAULT,
			Gdpr::PROCESS_REASON_READ,
			__CLASS__ . '->' . __FUNCTION__
		);
		$this->assertEquals( $start, $raw );

		Gdpr::cleanup( $index );

	}



	public function testGetAnonDocumentUri()
	{
		$Gdpr = new Gdpr();
		$index = Gdpr::SERVER_KEY_URI;
		$start = 'http://www.example.com:8080/path?a=1&b=2';
		$expected = 'http://www.example.com:8080/path';

		#$anonRequestUri = $parts['scheme'] . '://' . $parts['host'] .  (empty($parts['port'])?'':':'.$parts['port']) . $parts['path'];
		$parts = parse_url($start);
		$_SERVER[$index] = $parts['path'] . '?' . $parts['query'];
		$_SERVER['SERVER_NAME'] = $parts['host'];
		$_SERVER['SERVER_PORT'] = $parts['port'];
		#$this->assertEquals( $start , $_SERVER[$index] );
		#var_dump($_SERVER);

		$anon = $Gdpr->getAnonDocumentLocationUrl([]);

		$this->assertNotEquals( $start, $anon );
		$this->assertEquals( $expected, $anon );

		Gdpr::cleanup( $index );


		// whitelist
		$start 		= 'http://www.example.com:8080/path?a=3&b=4';
		$expected 	= 'http://www.example.com:8080/path?b=4';

		$parts = parse_url($start);
		$_SERVER[$index] = $parts['path'] . '?' . $parts['query'];
		$_SERVER['SERVER_NAME'] = $parts['host'];
		$_SERVER['SERVER_PORT'] = $parts['port'];
		#$this->assertEquals( $start , $_SERVER[$index] );

		$anon = $Gdpr->getAnonDocumentLocationUrl([
			'whitelist' => ['b'],
		]);

		$this->assertEquals( $expected, $anon );
		Gdpr::cleanup( $index );

	}
}