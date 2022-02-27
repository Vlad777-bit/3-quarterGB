<?php

class PhpDeveloper implements IVacancy
{
    public array $vacancies;
    public array $observers = [];
    private static $instance = null;

    use TSingletone;

    public function addVacancy(string $vacancy): void
    {
        $this->vacancies[] = $vacancy;
        $this->notifyUsers($vacancy);
    }

    public function respondToVacancy(IObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function refuseVacancy(IObserver $observer): void
    {
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    public function notifyUsers()
    {
        foreach ($this->observers as $observer)
        {
            echo "Открыта новая вакансия на PhpDev <br>";
        }
    }
}