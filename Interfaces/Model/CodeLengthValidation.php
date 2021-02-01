<?php

namespace Training\Interfaces\Model;

class CodeLengthValidation implements CodeValidationInterface
{
    public function validate($code): void
    {
        if (strlen($code) > 9) {
            throw new \InvalidArgumentException('Code must not be more than 9 characters');
        }
    }
}
