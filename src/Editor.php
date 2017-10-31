<?php

namespace AlexanderZabornyi\MementoTest;

class Editor
{
    protected $content = '';

    /**
     * Добавить в контент
     *
     * @param string $words
     */
    public function add(string $words)
    {
        $this->content = $this->content . ' ' . $words;
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

    /**
     * Сохранить
     *
     * @return EditorMemento
     */
    public function save()
    {
        return new EditorMemento($this->content);
    }

    /**
     * Вернуться к сохранению
     *
     * @param EditorMemento $memento
     */
    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}