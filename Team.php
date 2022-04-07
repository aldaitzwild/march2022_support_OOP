<?php
class Team {

    private string $name;
    public array $players = [];

    public function addPlayer(Player $player):void
    {
        $this->players[] = $player;
    }

}