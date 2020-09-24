<?php

namespace Ab\LocoX\Clause\Nonterminal;

use Ab\LocoX\Clause\Nonterminal\GreedyMultiParser;

/**
 * Tiny subclass is ironically much more useful than GreedyMultiParser
 */
class GreedyStarParser extends GreedyMultiParser
{
    public function __construct($internal, $callback = null)
    {
        $this->string = 'new ' . __CLASS__ . '(' . $internal . ')';
        parent::__construct($internal, 0, null, $callback);
    }
}