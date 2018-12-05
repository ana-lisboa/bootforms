<?php namespace AnaLisboa\BootForms\Elements;

use AnaLisboa\Form\Elements\Element;

class HelpBlock extends Element
{
    private $message;

    public function __construct($message, $class = 'form-text text-muted')
    {
        $this->message = $message;
        $this->addClass($class);
    }

    public function render()
    {
        $html = '<p';
        $html .= $this->renderAttributes();
        $html .= '>';
        $html .= $this->message;
        $html .= '</p>';

        return $html;
    }
}
