<?php

  require 'Remittance.php';

  class RemittanceTest extends PHPUnit_Framework_TestCase{
    private $remittance;

    protected function setUp(){
      $this->remittance = new Remittance('xZ4A1TuPxx-Vyywo1FanrvxGH59ZCs6X');
    }

    protected function tearDown(){
      $this->remittance = NULL;
    }

    public function testSave(){
      $post_data = array(
        'recipient_id' => '48531',
        'remittance' => array(
          'amount' => '100',
          'currency' => 'PHP',
          'strategy' => 'bank',
          'remittance_details' => array(
            'bank' => 'ABC',
            'bank_account_type' => 'PHP Savings',
            'bank_account_name' => 'hello sci',
            'bank_account_number' => '000002345678901'
          )
        )
      );

      $result = $this->remittance->save(10876, $post_data);
      $this->assertNotNull(json_decode($result));
    }

    public function testCompute(){
      $post_data = array(
        'amount' => '100',
        'currency' => 'PHP',
        'strategy' => 'pickup',
        'provider' => 'ABC',
        'province' => 'Abra'
      );

      $result = $this->remittance->compute(10876, $post_data);
      $this->assertNotNull(json_decode($result));
    }

    public function testShowAll(){
      $result = $this->remittance->showAll(10876);
      $this->assertInternalType('array', json_decode($result));
    }

    public function testShowInfo(){
      $result = $this->remittance->showInfo(10876, 54050);
      $this->assertNotNull(json_decode($result));
    }
  }//close RemittanceTest class
?>
