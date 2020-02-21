<?php
class Pangolin {
    public $friends;
    public $skills;

    public function __construct(array $friends = NULL, Skill $skills) {
        $this->friends = $friends;
        $this->skills = $skills;
    }
}