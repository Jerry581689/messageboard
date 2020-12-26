<?php
use CodeIgniter\Test\FeatureTestCase;

class MessageBoardControllerTest extends FeatureTestCase
{
    //private $url = 'ControllerApi';

    public function Testindex()
    {
        $result = $this->get($this->url);

        $result->assertOK();
    }

    public function Testcreate()
    {
        $result = $this->get($this->url);

        $result->assertOK();

    }

    public function Testremove()
    {
        $result = $this->get($this->url);

        $result->assertOK();

    }

    public function Testedit()
    {
        $result = $this->get($this->url);

        $result->assertOK();

    }
}
