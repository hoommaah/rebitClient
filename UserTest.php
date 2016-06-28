<?php
  require 'User.php';

  class UserTests extends PHPUnit_Framework_TestCase{
    private $user;

    protected function setUp(){
      $this->user = new User('wUVEoYSSpzzg85pHK-dLkHMGw7tkhEmd');
    }//close setUp

    protected function teadDown(){
      $this->user = NULL;
    }

    public function testShow(){
      $result = $this->user->show();
      $this->assertEquals(200,$result->getStatusCode());
    }

    public function testUpdate(){
      $put_data = array(
        'user' => array(
          'first_name' => 'first',
          'last_name' => 'last',
          'mobile' => '09xxxxxxxxx',
          'address' => 'legazpi street',
          'city' => 'Makati',
          'country' => 'Philippines',
          'postal_code' => '1111',
          'identification' => array(
              'url' => 'http://aws.amazon/com/image.jpg'
          ),
          'proof_of_address' => array(
              'url' => 'http://aws.amazon.com/image.jpg'
          ),
          'birthday' => '1-1-1111'
        )//close user array
      );//close put_data
      
    }
  }

?>
