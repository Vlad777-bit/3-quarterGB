<?php

class CreateVacancy
{

    public string $name;
    public string $company;

    public function __construct($name, $company)
    {
        $this->name = $name;
        $this->company = $company;
        $this->createVacancy($this->name);

    }

    private function createVacancy($name) {
        PhpDeveloper::getInstance()->addVacancy($this->name);
    }
}