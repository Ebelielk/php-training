<?php

class FootballTeam{
    public function __construct(private string $name,
    private string $managerName,
    private string $createdAt,
    private string $coachName,
    private int $players){

    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of managerName
     *
     * @return string
     */
    public function getManagerName(): string
    {
        return $this->managerName;
    }

    /**
     * Set the value of managerName
     *
     * @param string $managerName
     *
     * @return self
     */
    public function setManagerName(string $managerName): self
    {
        $this->managerName = $managerName;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of coachName
     *
     * @return string
     */
    public function getCoachName(): string
    {
        return $this->coachName;
    }

    /**
     * Set the value of coachName
     *
     * @param string $coachName
     *
     * @return self
     */
    public function setCoachName(string $coachName): self
    {
        $this->coachName = $coachName;

        return $this;
    }

    /**
     * Get the value of players
     *
     * @return int
     */
    public function getPlayers(): int
    {
        return $this->players;
    }

    /**
     * Set the value of players
     *
     * @param int $players
     *
     * @return self
     */
    public function setPlayers(int $players): self
    {
        $this->players = $players;

        return $this;
    }
}



