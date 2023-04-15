<?php declare(strict_types=1);

namespace App\Models;

class BusinessReport
{
    private string $name;
    private string $sepa;
    private string $address;
    private string $registred;
    private float $rank;

    public function __construct(string $name, string $sepa, string $address, string $registred, float $rank)
    {
        $this->name = $name;
        $this->sepa = $sepa;
        $this->address = $address;
        $this->registred = $registred;
        $this->rank = $rank;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSepa(): string
    {
        return $this->sepa;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getRegistred(): string
    {
        return $this->registred;
    }

    public function getRank(): float
    {
        return $this->rank;
    }

}