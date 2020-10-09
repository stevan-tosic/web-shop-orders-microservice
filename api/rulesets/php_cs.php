<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/../src')
    ->in(__DIR__.'/../tests')
;

return PhpCsFixer\Config::create()
    ->setRules([
        'no_unused_imports' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'no_extra_blank_lines' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder)
;
