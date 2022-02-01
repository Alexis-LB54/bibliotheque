<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Book
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $resume;

    /**
     * @ORM\Column(type="string")
     */
    private string $author;

    /**
     * @ORM\Column(type="string")
     */
    private string $editor;

    /**
     * @ORM\Column(type="integer")
     */
    private int $ISBN;

    /**
     * @ORM\Column(type="integer")
     */
    private int $stock_number;

    /**
     * @ORM\Column(type="integer")
     */
    private int $borrow_number;

    public function __construct(string $title, string $resume, string $author, string $editor, int $ISBN, int $stock_number, int $borrow_number)
    {
        $this->title = $title;
        $this->resume = $resume;
        $this->author = $author;
        $this->editor = $editor;
        $this->ISBN = $ISBN;
        $this->stock_number = $stock_number;
        $this->borrow_number = $borrow_number;
    }

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     */
    public function getResume(): string
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */
    public function setResume($resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of editor
     */
    public function getEditor(): string
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     *
     * @return  self
     */
    public function setEditor($editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get the value of ISBN
     */
    public function getISBN(): int
    {
        return $this->ISBN;
    }

    /**
     * Set the value of ISBN
     *
     * @return  self
     */
    public function setISBN($ISBN): self
    {
        $this->ISBN = $ISBN;

        return $this;
    }

    /**
     * Get the value of stock_number
     */
    public function getStock_number(): int
    {
        return $this->stock_number;
    }

    /**
     * Set the value of stock_number
     *
     * @return  self
     */
    public function setStock_number($stock_number): self
    {
        $this->stock_number = $stock_number;

        return $this;
    }

    /**
     * Get the value of borrow_number
     */
    public function getBorrow_number(): int
    {
        return $this->borrow_number;
    }

    /**
     * Set the value of borrow_number
     *
     * @return  self
     */
    public function setBorrow_number($borrow_number): self
    {
        $this->borrow_number = $borrow_number;

        return $this;
    }
}
