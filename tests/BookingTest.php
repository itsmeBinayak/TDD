<?php
namespace App\tests;

use App\Entity\Bookings;
use App\Entity\Room;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;
//class has to end with Test
class BookingTest extends TestCase
{
    public function dataProviderForBooking() : array
    {
        return [
            [new DateTime('2022-01-20 13:25:30'),new DateTime('2022-01-20 15:30:30'),true],
            [new DateTime('2022-01-20 13:25:30'),new DateTime('2022-01-20 19:30:30'),false],
            [new DateTime('2022-01-20 13:25:30'),new DateTime('2022-01-20 16:30:30'),true],
            [new DateTime('2022-01-20 13:25:30'),new DateTime('2022-01-20 21:30:30'),false]
        ];
    }

    /**
     * function has to start with Test
     * @dataProvider dataProviderForBooking
     */
    public function testBooking(DateTime $startDate, DateTime $endDate,bool $expectedOutput): void{

        $booking = new Bookings();

        $this->assertEquals($expectedOutput, $booking->canBook($startDate,$endDate));
    }

}