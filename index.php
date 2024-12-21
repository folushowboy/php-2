<?php
class LuxuryCar
{
    //properties
    public $name;
    public $type;
    public $price;
    public $year;

    public function __construct($name, $type, $price, $year)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->year = $year;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_price()
    {
        return $this->price;
    }
    function get_type()
    {
        return $this->type;
    }
    function get_year()
    {
        return $this->year;
    }

    public function __destruct()
    {
        echo " this ($this->name has beem created";
    }
}

$lexus = new LuxuryCar(' Jaguar F', ' TypeR', ' $100k', ' 2020');
echo ($lexus->get_price());
echo ($lexus->get_type());
echo ($lexus->get_name());
echo ($lexus->get_year());
