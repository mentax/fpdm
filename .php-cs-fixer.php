<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@PHP80Migration' => true,

        'no_closing_tag' => true,

        'braces_position' => [
            'classes_opening_brace' => 'same_line',
            'control_structures_opening_brace' => 'same_line',
            'functions_opening_brace' => 'same_line',
        ],
    ])
    ->setFinder($finder)
    ->setIndent("\t")
    ;
