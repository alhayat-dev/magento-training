<?php


namespace Training\PoolPattern\Model;


class CodeLengthValidation implements CodeValidationInterface
{
    public function validate(string $code): void
    {
        if (strlen($code) > 10) {
            throw new \InvalidArgumentException("Code must not be more than 10 characters.");
        }
    }
}
