<?php

namespace AlexanderZabornyi\MementoTest;

class EditorMemento
{
    protected $content;

    /**
     * EditorMemento constructor.
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * Получить контент
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}