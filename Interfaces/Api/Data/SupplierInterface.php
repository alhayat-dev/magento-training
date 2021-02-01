<?php


namespace Training\Interfaces\Api\Data;


interface SupplierInterface
{
    public function setCode($code): void;

    public function getCode(): string;
}
