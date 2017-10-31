<?php

namespace AlexanderZabornyi\MementoTest\Tests;

use AlexanderZabornyi\MementoTest\Editor;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testMemento()
    {
        $editor = new Editor();

        $editor->add('First sentence.');
        $editor->add('Second sentence.');

        $saved = $editor->save();

        $editor->add('Third sentence.');

        $this->assertEquals(
            ' First sentence. Second sentence. Third sentence.',
            $editor->getContent()
        );

        $editor->restore($saved);

        $this->assertEquals(
            ' First sentence. Second sentence.',
            $editor->getContent()
        );
    }
}