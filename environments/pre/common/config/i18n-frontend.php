<?php
/**
 * Configuration file for 'yii message/extract' command.
 *
 * This file is automatically generated by 'yii message/config' command.
 * It contains parameters for source code messages extraction.
 * You may modify this file to suit your needs.
 *
 * You can use 'yii message/config-template' command to create
 * template configuration file with detailed description for each parameter.
 */
return [
    'color' => '0',
    'interactive' => true,
    'help' => null,
    'sourcePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'frontend',
    'messagePath' => 'messages',
    'languages' => [
        'es-ES',
        'ru-RU',
    ],
    'translator' => 'Yii::t',
    'sort' => false,
    'overwrite' => true,
    'removeUnused' => false,
    'markUnused' => true,
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
    ],
    'only' => [
        '*.php',
    ],
    'format' => 'po',
    'db' => 'db',
    'sourceMessageTable' => '{{%source_message}}',
    'messageTable' => '{{%message}}',
    'catalog' => 'frontend',
    'ignoreCategories' => [
        'yii',
        'app*',
    ],
];
