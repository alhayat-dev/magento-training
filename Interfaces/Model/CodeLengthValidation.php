<?php

namespace Training\Interfaces\Model;

class CodeLengthValidation implements CodeValidationInterface
{
    /**
     * @param $code
     */
    public function validate($code)
    {
        if (strlen($code) > 9) {
            throw new \InvalidArgumentException('Code must not be more than 9 characters');
        }
    }
}
