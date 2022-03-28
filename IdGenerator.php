<?php


class IdGenerator
{

    /**
     *  divider between sections
     * - , / , *
     * @var string
     */
    protected string $divider = '-';

    /**
     *  array of section that generated
     *  Ha-2001-07-16-S
     * @var array
     */
    protected array $id = [];


    /**
     *  data section
     *  for example  :Y-m-d , Ymd ,Y ,m ...etc
     * @param string $format Y-m-d , Ymd ,Y
     * @return $this
     */
    public  function  date(string $format='Ym') : static
    {
        $this->id []= date($format);

        return $this;
    }

    /**
     * character section
     * for example  : act , user
     * @param string $char
     * @return $this
     */
    public function chars(string $char) : static
    {
        $this->id []=  $char;

        return $this;
    }

    /**
     * number section this function passed the number and the length then function replace the zero
     * form the left or right or both with specified  length
     * for example : number : 10 and length:10 , right => 100000000
     * @param int $number
     * @param int|null $length
     * @param int $sideZero
     * @return $this
     */
    public function number(int $number, ?int $length = 0, int $sideZero = 0) : static
    {
        $this->id []= str_pad($number,$length,0,$sideZero);

        return $this;
    }

    /**
     * divider between sections
     *  for example  : - , * , /
     * @param string $divider
     * @return $this
     */
    public function divider(string $divider = '-'): static
    {
        $this->divider = $divider;

        return $this;
    }

    /**
     * get generated id
     * @return string
     */
    public function get(): string
    {
        return implode($this->divider,$this->id);
    }
}
