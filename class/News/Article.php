<?php

namespace News;


class Article
{
    protected $id;
    protected $created;
    protected $headline;
    protected $text;
    protected $author;

    /**
     * Article constructor.
     * @param $id
     * @param $created
     * @param $headline
     * @param $text
     * @param $author
     */
    public function __construct($id, $created, $headline, $text, $author)
    {
        $this->id = $id;
        $this->created = $created;
        $this->headline = $headline;
        $this->text = $text;
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

}