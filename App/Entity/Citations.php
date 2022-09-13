<?php
class Citations {
    private int $id;
    private ?string $citation;


    public function getId(): int
    {
        return $this->id;
    }

    public function getCitation(): ?string
    {
        return $this->citation;
    }

    public function setCitation(?string $citation): void
    {
        $this->citation = $citation;
    }

}