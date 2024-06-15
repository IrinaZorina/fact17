<?php
class strings
{
    public $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function search($text)
    {
        return mb_strpos($this->string, $text);
    }

    public function copy()
    {
        return $this->string;
    }

    public function length()
    {
        return mb_strlen($this->string);
    }

    public function replace($text, $replacement)
    {
        $this->string = preg_replace("/$text/", $replacement, $this->string);
        return $this->string;
    }

    public function delete($text)
    {
        return $this->replace($text, '');
    }
}
