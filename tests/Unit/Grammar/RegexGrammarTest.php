<?php

namespace Ab\Tests\Loco\Grammar;

use Ab\LocoX\Grammar\RegexGrammar;
use \PHPUnit\Framework\TestCase as TestCase;

class RegexGrammarTest extends TestCase
{
    public function samples()
    {
        return array(
            array("a{2}"),
            array("a{2,}"),
            array("a{2,8}"),
            array("[$%\\^]{2,8}"),
            array("[ab]*"),
            array("([ab]*a)"),
            array("([ab]*a|[bc]*c)"),
            array("([ab]*a|[bc]*c)?"),
            array("([ab]*a|[bc]*c)?b*"),
            array("[a-zA-Z]"),
            array("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),
            array("[a]"),
            array("[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789]"),
            array("[|(){},?*+\\[\\]\\^.\\\\]"),
            array("[\\f\\n\\r\\t\\v\\-]"),
            array("\\|"),
            array("\\(\\)\\{\\},\\?\\*\\+\\[\\]^.-\\f\\n\\r\\t\\v\\w\\d\\s\\W\\D\\S\\\\"),
            array("abcdef"),
            array("19\\d\\d-\\d\\d-\\d\\d"),
            array("[$%\\^]{2,}"),
            array("[$%\\^]{2}"),
            array("")
        );
    }

    /**
     * @dataProvider samples
     * @param string $sample a sample regex
     */
    public function testSamples($sample)
    {
        $grammar = new RegexGrammar();


        // TODO: This was carried over from the original tests, only verifies that no exceptions are thrown...
        // TODO: Should do some verification here to make sure the output is correct.
        $grammar->parse($sample);
    }
}
