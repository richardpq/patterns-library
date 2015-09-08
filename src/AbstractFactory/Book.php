<?php

namespace AbstractFactory;

class Book
{
    /** @var  string $title */
    protected $title;
    /** @var  array $authors */
    protected $authors;
    /** @var  string $isbn*/
    protected $isbn;
    /** @var int $numberOfPages */
    protected $numberOfPages;
    /** @var \DateTime $publicationDate */
    protected $publicationDate;
    /** @var string $edition */
    protected $edition;

    public function __construct()
    {
        $this->authors = [];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (empty($this->getAuthors()) || !$this->getTitle()) {
            return 'Book information is incomplete';
        }

        $authors = implode(' & ', $this->getAuthors());

        return $this->getTitle().' By '.$authors;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return array
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @param array $author
     *
     * @return Book
     */
    public function addAuthor($author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * @param array $authors
     *
     * @return Book
     */
    public function addAuthors(array $authors)
    {
        $this->authors = array_merge($this->authors, $authors);

        return $this;
    }

    /**
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     *
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * @param int $numberOfPages
     *
     * @return Book
     */
    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param \DateTime $publicationDate
     *
     * @return Book
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param string $edition
     *
     * @return Book
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }
}
