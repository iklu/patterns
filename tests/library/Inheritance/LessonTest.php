<?php
namespace tests\library\Inheritance;
use src\library\Inheritance\Lecture;
use src\library\Inheritance\Seminar;
use src\library\Inheritance\Lesson;
use PHPUnit\Framework\TestCase;

class LessonTest extends \TestCase
{
	public function testLectureCostAndChargeType()
	{
		$lecture = new Lecture( 5, Lesson::FIXED );
		print " Lecture : {$lecture->cost()} euro,  ({$lecture->chargeType()})\n";	
	}
	
	public function testSeminarCostAndChargeType()
	{
		$seminar= new Seminar( 3, Lesson::TIMED );
		print "Seminar : {$seminar->cost()} euro ,({$seminar->chargeType()})\n";
	}  
}
