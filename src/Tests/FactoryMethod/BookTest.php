<?php

namespace Tests\FactoryMethod;

use FactoryMethod\Book;

class BookTest extends \PHPUnit_Framework_TestCase
{

    /** @var  Book $book */
    private $book;

    public function setUp()
    {
        $this->book = new Book();
    }

    public function testSetTitle()
    {
        $title = 'Testing with PHP and PHPUnit';
        $this->book->setTitle($title);

        $this->assertEquals($title, $this->book->getTitle(), "Set Title failed");
    }

    public function testAddAuthors()
    {
        $singleAuthor = 'Richard R. Pérez Q.';
        $multipleAuthors = ['John Doe', 'Jane Doe'];

        $this->book->addAuthor($singleAuthor);
        $this->assertContains($singleAuthor, $this->book->getAuthors(), "Adding single author failed");

        $this->book->addAuthors($multipleAuthors);
        $this->assertContains(
            $multipleAuthors[0],
            $this->book->getAuthors(),
            "{$multipleAuthors[0]} is not present in Authors List"
        );

        $this->assertContains(
            $multipleAuthors[1],
            $this->book->getAuthors(),
            "{$multipleAuthors[1]} is not present in Authors List"
        );

        $this->assertCount(3, $this->book->getAuthors(), "The number of authors didn't match");
    }

    public function testSetIsbn()
    {
        $isb = 'ABC-123456789';
        $this->book->setIsbn($isb);

        $this->assertEquals($isb, $this->book->getIsbn(), "Set Isbn failed");
    }

    public function testSetNumberOfPages()
    {
        $numberOfPages = 10;
        $this->book->setNumberOfPages($numberOfPages);

        $this->assertEquals($numberOfPages, $this->book->getNumberOfPages(), "Set number of pages failed");
    }

    public function testSetPublicationDate()
    {
        $pubDate = new \DateTime('2015-09-03');
        $this->book->setPublicationDate($pubDate);

        $this->assertEquals($pubDate, $this->book->getPublicationDate(), "Set publication date failed");
    }

    public function testSetEdition()
    {
        $edition = "First Edition";
        $this->book->setEdition($edition);

        $this->assertEquals($edition, $this->book->getEdition(), "Set edition failed");
    }



    public function testStringRepresentationWithEmptyAuthors()
    {
        $this->book->setTitle("My Pattern's Book");

        $this->assertEquals(
            'Book information is incomplete',
            (string) $this->book,
            'To String for Book with no authors failed'
        );
    }

    public function testStringRepresentationWithEmptyTitle()
    {
        $this->book->addAuthors(['Jane Doe', 'John Doe']);

        $this->assertEquals(
            'Book information is incomplete',
            (string) $this->book,
            'To String for Book with no title failed'
        );
    }

    public function testStringRepresentationWithTitleAndOneAuthors()
    {
        $this->book->addAuthor('Jane Doe');
        $this->book->setTitle("My Pattern's Book");

        $this->assertEquals(
            "My Pattern's Book By Jane Doe",
            (string) $this->book,
            'To String for Book with title and one author failed'
        );
    }

    public function testStringRepresentationWithTitleAndMoreThanOneAuthor()
    {
        $this->book->addAuthors(['Jane Doe', 'John Doe']);
        $this->book->setTitle("My Pattern's Book");

        $this->assertEquals(
            "My Pattern's Book By Jane Doe & John Doe",
            (string) $this->book,
            'To String for EBook with title and two authors failed'
        );

        $this->book->addAuthor('Richard Pérez');

        $this->assertEquals(
            "My Pattern's Book By Jane Doe & John Doe & Richard Pérez",
            (string) $this->book,
            'To String for EBook with title and one author failed'
        );
    }
}
