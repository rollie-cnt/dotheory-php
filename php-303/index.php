<?php

class Country
{
    private $name = '';
    private $description = '';
    private $start_year_colonization = '';
    private $end_year_colonization = '';

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setYearsColonization($start, $end)
    {
        $this->start_year_colonization = $start;
        $this->end_year_colonization = $end;
    }

    public function getDetails()
    {
        $start = new DateTime($this->start_year_colonization);
        $end = new DateTime($this->end_year_colonization);
        $interval = $start->diff($end);

        return "
            Name: $this->name<br>
            Description: $this->description<br>
            Start: $this->start_year_colonization<br>
            End: $this->end_year_colonization<br>
            Total Colonization years: $interval->y <br><br>
        ";
    }
}

$spain = new country('Spain');
$america = new country('America');
$japan = new country('Japan');

$spain->setDescription('They have spanish bread');
$spain->setYearsColonization('01/01/1565', '01/01/1898');

$america->setDescription('They think the Earth is flat');
$america->setYearsColonization('01/01/1898', '01/01/1946');

$japan->setDescription('yamete kudasai');
$japan->setYearsColonization('01/01/1941', '01/01/1945');

echo $spain->getDetails();
echo $america->getDetails();
echo $japan->getDetails();
