<?php

namespace App\Api\V1\Dtos;

class HeroesDto
{
    private string $name;
    private string $gender;
    private string $culture;
    private string $died;
    private string $mother;
    private string $father;
    private string $title;
    private string $alias;
    private string $book;
    private string $tv_serie;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getCulture(): string
    {
        return $this->culture;
    }

    /**
     * @param string $culture
     */
    public function setCulture(string $culture): void
    {
        $this->culture = $culture;
    }

    /**
     * @return string
     */
    public function getDied(): string
    {
        return $this->died;
    }

    /**
     * @param string $died
     */
    public function setDied(string $died): void
    {
        $this->died = $died;
    }

    /**
     * @return string
     */
    public function getMother(): string
    {
        return $this->mother;
    }

    /**
     * @param string $mother
     */
    public function setMother(string $mother): void
    {
        $this->mother = $mother;
    }

    /**
     * @return string
     */
    public function getFather(): string
    {
        return $this->father;
    }

    /**
     * @param string $father
     */
    public function setFather(string $father): void
    {
        $this->father = $father;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getBook(): string
    {
        return $this->book;
    }

    /**
     * @param string $book
     */
    public function setBook(string $book): void
    {
        $this->book = $book;
    }

    /**
     * @return string
     */
    public function getTvSerie(): string
    {
        return $this->tv_serie;
    }

    /**
     * @param string $tv_serie
     */
    public function setTvSerie(string $tv_serie): void
    {
        $this->tv_serie = $tv_serie;
    }

    public function toArray(): array
    {
        $heroesDtoArray = [];
        $heroesDtoParamsArray = get_object_vars($this);

        if (!empty($heroesDtoParamsArray)) {
            foreach ($heroesDtoParamsArray as $paramKey => $paramVal) {
                $paramKey = strtolower($paramKey);
                $heroesDtoArray[$paramKey] = $paramVal;
            }
        }
        return $heroesDtoArray;
    }
}
