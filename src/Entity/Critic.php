<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Critic
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="Book")
     * @ORM\JoinColumn(name="Book", referencedColumnName="id")
     */
    private Book $Book;

    /**
     * @ORM\Column(type="integer")
     */
    private int $note;

    /**
     * @ORM\Column(type="string")
     */
    private string $comment;

    public function __construct(Book $Book, int $note, string $comment)
    {
        $this->Book = $Book;
        $this->note = $note;
        $this->comment = $comment;
    }

    /**
     * Get the value of note
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */
    public function setNote($note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of comment
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */
    public function setComment($comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of Book
     */ 
    public function getBook() : Book
    {
        return $this->Book;
    }

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }
}
