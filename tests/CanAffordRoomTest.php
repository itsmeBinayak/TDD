<?php
namespace App\tests;
use App\Entity\Room;
use App\Entity\User;
use PHPUnit\Framework\TestCase;
//class has to end with Test
class CanAffordRoomTest extends TestCase
{
    public function dataProviderForAffordableRoom() : array
    {
        return [
            [new User(true),100,2,true],
            [new User(false),0,5,false],
            [new User(true),300,3,true],
            [new User(true),10,2,true]
        ];
    }

    /**
     * function has to start with Test
     * @dataProvider dataProviderForAffordableRoom
     */
    public function testCanAffordRoom(User $user,int $credit,int $duration, bool $expectedOutput): void{

        $user = new User(false);
        $user->setCredit($credit);
        $this->assertEquals($expectedOutput, $user->canAfford($user,$duration));
    }

}