<?php

class Player 
{
    private string $firstname;
    private string $lastname;
    private int $number;
    private string $position;
    private string $password;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function __toString(): string
    {
        return 'Bonjour, je m\'appelle ' . $this->firstname . ' ' . $this->lastname;
    }
}