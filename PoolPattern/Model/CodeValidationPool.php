<?php

namespace Training\PoolPattern\Model;

class CodeValidationPool
{
    /**
     * @var array
     */
    protected array $validations;

    /**
     * CodeValidationPool constructor.
     * @param array $validations
     */
    public function __construct(array $validations)
    {
        $this->validations = $validations;
    }

    /**
     * @param string $code
     */
    public function validate(string $code): void
    {
        foreach ($this->validations as $validation) {
            $validation->validate($code);
        }
    }
}
