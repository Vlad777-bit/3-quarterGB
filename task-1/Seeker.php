<?php

class Seeker implements IObserver
{
    protected string $name;
    protected string $email;
    protected int | float $experience;

    public function __construct(string $name, string $email, int | float $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function getName() : string
    {
        return  $this->name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getExperience() : int | float
    {
        return $this->experience;
    }

    public function subscribeToNotification(string $vacancy): void
    {
        PhpDeveloper::getInstance()->respondToVacancy($this);
    }

    public function unsubscribeFromNotification(string $vacancy): void
    {
        PhpDeveloper::getInstance()->refuseVacancy($this);

    }
}