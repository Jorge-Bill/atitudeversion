<?php

namespace Atitude\Pacotes\Tests\Unit\Database;

use Atitude\Pacotes\Database\Database;

use PDO;

class DatabaseTest extends \PHPUnit_Framework_TestCase
{
    protected $Database;
//
//    protected function setUp()
//    {
//        $this->Database = new Database();
//    }

    public function testeFindAll()
    {
        $teste = $this->getMockBuilder('Database')
            ->disableOriginalConstructor()
            ->getMock();


        // Configura o esboço.
//        $teste->method('findAll')
//            ->will($this->throwException(new Exception));

        // $teste->doSomething() lança Exceção
//        $teste->findAll();

    }


}
