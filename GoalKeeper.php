<?php
class GoalKeeper extends Player
{
    private int $gloveSize;

    public function __construct(string $firstname, string $lastname, int $gloveSize)
    {
        parent::__construct($firstname, $lastname);
        $this->gloveSize = $gloveSize;
    }

    public function __toString(): string
    {
        return parent::__toString() . '. Et je suis un gardien.';
    }
}