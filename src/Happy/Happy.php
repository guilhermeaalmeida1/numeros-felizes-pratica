<?php

namespace src\Happy;

class Happy
{
    const HAPPY_NUMBER = 1;
    public array $previousNumber = [];

    public function __construct(public $givenRandonNumber = null)
    {
    }

    public function sumResult()
    {
        $sum = 0;

        if (is_null($this->givenRandonNumber)) {
            return false;
        }

        $stringToArray = str_split($this->givenRandonNumber);

        foreach ($stringToArray as $letter) {
            if (in_array($letter, $this->previousNumber)) {
                return false;
            }

            $sum += $this->powNumber($letter);
        }

        if ($sum == self::HAPPY_NUMBER) {
            return self::HAPPY_NUMBER;
        }

        $this->givenRandonNumber = $sum;
        $this->previousNumber = $stringToArray;
        $this->sumResult();
    }

    public function powNumber(int $number): int
    {
        return pow($number, 2);
    }
}