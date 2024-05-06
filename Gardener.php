<?php

class Gardener
{
    public string $name;
    private TomatoBush $plant;
    public function __construct(string $name, TomatoBush $plant)
    {
        $this->name = $name;
        $this->plant = $plant;
    }

    public function work($tomatoBush)
    {
        $this->plant->growAll();
    }

    public function harvest(): void
    {
        if ($this->plant->allAreRipe()) {
            echo 'Садовник ' . $this->name . ' собирает урожай!' . PHP_EOL;
            $this->plant->giveAwayAll();
        } else {
            echo 'Томаты еще не все дозрели, продолжаем ухаживать' . PHP_EOL;
        }
    }

    public static function knowledgeBase(): void
    {
        echo "Справка по садоводству:";
    }
}
