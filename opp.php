<?php


class Book
{

    private $title;
    private $available_copy;


    public function __construct(string $title, int $availableCopy)
    {
        $this->title = $title;
        $this->available_copy = $availableCopy;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getAvailableCopy()
    {
        return $this->available_copy;
    }

    public function borrowBook()
    {
        if ($this->available_copy > 0) {
            $this->available_copy--;
            return true;
        } else {
            false;
        }
    }


    public function returnBook()
    {
        $this->available_copy++;
    }
};


class Member
{
}
