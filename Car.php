
<?php

class Car
{
    //Properties
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    //Methods

    public function __construct(string $color,int $nbSeats, int $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string
    {
        $sentence = "Let's go!";

    }

    public function forward(): string

    {

        $this->currentSpeed = 50;
        return "Go !";

    }


    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";

        }

   $sentence .= "I'm stopped !";

   return $sentence;

    }

    public function getNbWheels ()
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed ()
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor ()
    {
        $this->color = $color;
    }

    public function getNbSeats ()
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy ()
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel ()
    {
        $this->energyLevel = $energyLevel;
    }

}