<?php

class LuckyNumbers
{
    private function array_to_int($array_digitis)
    {
        $digits_int = '';
        foreach($array_digitis as $digit)
            $digits_int = $digits_int . $digit;
        return (int) $digits_int;
    }
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $number_1 = $this->array_to_int($digitsOfNumber1);
        $number_2 = $this->array_to_int($digitsOfNumber2);
        return $number_1 + $number_2;
    }

    public function isPalindrome(int $number): bool
    {
        $reverse = implode('', array_reverse(str_split((String) $number)));
        return $number == $reverse;
    }

    public function validate(string $input): string
    {
        if ($input === '')
            return 'Required field';
        
        $input = (int) $input;

        if ($input < 1)
            return 'Must be a whole number larger than 0';
        return '';
    }
}
