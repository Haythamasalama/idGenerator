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
}
