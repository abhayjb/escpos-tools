<?php
namespace ReceiptPrintHq\EscposTools\Parser\Command;

use ReceiptPrintHq\EscposTools\Parser\Command\EscposCommand;

class CommandOneArg extends EscposCommand
{
    private $arg = null;

    function addChar($char)
    {
        if ($this -> arg === null) {
            $this -> arg = ord($char);
            return true;
        } else {
            return false;
        }
    }
}
