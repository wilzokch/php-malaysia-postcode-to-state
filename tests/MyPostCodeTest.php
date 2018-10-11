<?php 
use PHPUnit\Framework\TestCase;
use Wilzokch\PhpMalaysiaPostcodeToState\MyPostCode;

class MyPostCodeTest extends TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $postCode = new MyPostCode();
        $this->assertTrue(is_object($postCode));
        unset($postCode);
    }

    public function testMethod1()
    {
        $postCode = new MyPostCode('86000');
        $this->assertTrue($postCode->getState() == 'Johor');
        unset($postCode);
    }
}
