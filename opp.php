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
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function borrowBook(Book $book)
    {
        if ($book->borrowBook()) {

            echo $this->name . " successfully borrowed '" . $book->getTitle() . "'.\n";
        } else {
            echo $this->name . " failed to borrow '" . $book->getTitle() . "' because there are no available copies.\n";
        }
    }



    public function returnBook(Book $book)
    {

        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'.\n";
    }
}
