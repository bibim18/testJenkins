<?
	include "cal.php";
	class test_cal extends PHPUnit_Framework_TestCase{
			private $cal;
			public function setup() {$this->cal = new Cal();}
			/**
			* @dataProvider additionProvider
			*/
			public function testAdd($a, $b, $expected) {
				$this->assertEquals($expected, $this->cal->add($a, $b));
			}
			public function additionProvider()
			{
				return [
				'0+0=0' => [0, 0, 0],
				'0+1=1' => [0, 1, 1],
				'1+0=1' => [1, 0, 1],
				'1+4=5' => [1, 4, 5]
				];
			}

		}
?>