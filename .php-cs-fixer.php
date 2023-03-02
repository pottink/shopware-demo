<?php

$config = new PhpCsFixer\Config();

$config
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in([
                __DIR__ . '/src',
                __DIR__ . '/tests',
            ])
            ->name('*.php')
    )
    ->setRiskyAllowed(true)
    ->setRules([
            '@Symfony' => true,
            'align_multiline_comment' => true,
            'array_indentation' => true,
            'array_syntax' => ['syntax' => 'short'],
            'backtick_to_shell_exec' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => true,
            'cast_spaces' => ['space' => 'single'],
            'class_keyword_remove' => false,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'comment_to_phpdoc' => true,
            'compact_nullable_typehint' => true,
            'date_time_immutable' => true,
            'declare_strict_types' => true,
            'doctrine_annotation_array_assignment' => true,
            'doctrine_annotation_braces' => true,
            'doctrine_annotation_indentation' => true,
            'doctrine_annotation_spaces' => true,
            'escape_implicit_backslashes' => true,
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'final_class' => true,
            'final_internal_class' => true,
            'fully_qualified_strict_types' => true,
            'general_phpdoc_annotation_remove' => false,
            'header_comment' => false,
            'heredoc_to_nowdoc' => false,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => ['syntax' => 'short'],
            'mb_str_functions' => true,
            'method_chaining_indentation' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_whitespace_before_semicolons' => true,
            'native_function_invocation' => false,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'no_alternative_syntax' => true,
            'no_blank_lines_before_namespace' => false,
            'no_empty_phpdoc' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_superfluous_elseif' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'ordered_imports' => ['imports_order' => ['class', 'function', 'const']],
            'ordered_interfaces' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_order' => true,
            'phpdoc_to_comment' => false,
            'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
            'php_unit_dedicate_assert' => false,
            'php_unit_expectation' => false,
            'php_unit_method_casing' => ['case' => 'snake_case'],
            'php_unit_mock' => false,
            'php_unit_namespaced' => false,
            'php_unit_no_expectation_annotation' => false,
            'php_unit_set_up_tear_down_visibility' => true,
            'php_unit_strict' => false,
            'php_unit_test_annotation' => ['style' => 'annotation'],
            'php_unit_test_class_requires_covers' => false,
            'pow_to_exponentiation' => true,
            'random_api_migration' => false,
            'simplified_null_return' => true,
            'single_line_throw' => false,
            'static_lambda' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'string_line_ending' => true,
            'ternary_to_null_coalescing' => true,
            'void_return' => true,
        ]
    );

return $config;