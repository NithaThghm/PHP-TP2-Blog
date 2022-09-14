<?php
class Citations {
    private int $id;
    private ?string $citation;
    private ?int $id_auteur;
    private Auteurs $auteur;

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

    /**
     * @return int|null
     */
    public function getIdAuteur(): ?int
    {
        return $this->id_auteur;
    }

    /**
     * @param int|null $id_auteur
     */
    public function setIdAuteur(?int $id_auteur): void
    {
        $this->id_auteur = $id_auteur;
    }

    public function setAuteur(Auteurs $auteur): void
    {
        $this->auteur = $auteur;
    }

    /**
     * @return Auteurs
     */
    public function getAuteur(): Auteurs
    {
        return $this->auteur;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


}