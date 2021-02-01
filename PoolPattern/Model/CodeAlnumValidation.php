<?php


namespace Training\PoolPattern\Model;


class CodeAlnumValidation implements CodeValidationInterface
{
    public function validate(string $code): void
    {
        if (!ctype_alnum($code)) {
            throw new \InvalidArgumentException("Code must only contain alphanumeric characters.");
        }
    }
}
