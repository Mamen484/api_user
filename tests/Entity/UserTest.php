<?php
/**
 * Created by PhpStorm.
 * User: mmendy
 * Date: 27/03/2019
 * Time: 13:31
 */

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    /**
     * test getter and setter
     */
    public function testGetterAndSetter(): void
    {
        $id = 1;
        $this->user->setId($id);
        $this->assertEquals($id, $this->user->getId());

        $lastName = 'Mendy';
        $this->user->setLastName($lastName);
        $this->assertEquals($lastName, $this->user->getLastName());

        $firstName = 'Max';
        $this->user->setFirstName($firstName);
        $this->assertEquals($firstName, $this->user->getFirstName());

        $dateCreate = new \DateTime();
        $this->user->setDateCreate($dateCreate);
        $this->assertEquals($dateCreate, $this->user->getDateCreate());

        $dateUpdate = new \DateTime();
        $this->user->setDateUpdate($dateUpdate);
        $this->assertEquals($dateUpdate, $this->user->getDateUpdate());
    }
}