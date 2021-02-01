<?php


namespace Training\PoolPattern\Model;


class CodeNotEmptyValidation implements CodeValidationInterface
{
    public function validate(string $code): void
    {
        if ($code === '') {
            throw new \InvalidArgumentException("Code cannot be empty.");
        }
    }
}
