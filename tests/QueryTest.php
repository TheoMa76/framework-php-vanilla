<?php
use PHPUnit\Framework\TestCase;
use Theo\Controller\Database;

class QueryTest extends TestCase{

    //test phpunit pour tester les methode
    public function testMethod(){
        $database = new Database();
        $this->assertEquals("get", $database->get([])->getMethod());
        $this->assertEquals('post', $database->post([])->getMethod());
        $this->assertEquals('update', $database->update([])->getMethod());
        $this->assertEquals('soft-delete', $database->delete([])->getMethod());
        $this->assertEquals('delete', $database->delete([],true)->getMethod());
    }

    //test phpunit pour tester format
    public function testFormat(){
        $database = new Database();
        $this->assertEquals("SELECT %s FROM %s WHERE %s ;", $database->get([])->getFormat());
        $this->assertEquals("UPDATE %s SET %s WHERE %s ;", $database->update([])->getFormat());
        $this->assertEquals("UPDATE %s SET %s WHERE %s ;", $database->delete([])->getFormat());
        $this->assertEquals("DELETE FROM %s WHERE %s ;", $database->delete([],true)->getFormat());
        $this->assertEquals("INSERT INTO %s %s VALUES %s ;",$database->post([])->getFormat());
    }

    //test phpunit pour tester les params
    public function testParams(){
        $database = new Database();
        $this->assertEquals('name = "Maerten" AND surname = "Theo"', $database->get(['filters'=>['name'=>'Maerten','surname'=>'Theo']])->parseParams());        
    }
}