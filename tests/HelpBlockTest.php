<?php

use AnaLisboa\BootForms\Elements\HelpBlock;

class HelpBlockTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testCanRenderBasicHelpBlock()
    {
        $helpBlock = new HelpBlock('Email is required.');

        $expected = '<p class="form-text text-muted">Email is required.</p>';
        $result = $helpBlock->render();
        $this->assertEquals($expected, $result);

        $helpBlock = new HelpBlock('First name is required.');

        $expected = '<p class="form-text text-muted">First name is required.</p>';
        $result = $helpBlock->render();
        $this->assertEquals($expected, $result);
    }
}
