<?php

/**
 * @file
 * Bootstrap the Kirby plugin.
 *
 * @author  Daniel Weidner <hallo@danielweidner.de>
 * @package Weidner\Blog
 * @since   1.0.0
 */

load([
  'weidner\\blog\\articlepage' => __DIR__ . DS . 'models' . DS . 'article.php',
  'weidner\\blog\\archivepage' => __DIR__ . DS . 'models' . DS . 'archive.php',
]);

// Content Type: Article
$kirby->set('blueprint', 'article', __DIR__ . DS . 'blueprints' . DS . 'article.yml');
$kirby->set('page::model', 'article', 'Weidner\\Blog\\ArticlePage');

// Content Type: Archive
$kirby->set('blueprint', 'archive', __DIR__ . DS . 'blueprints' . DS . 'archive.yml');
$kirby->set('page::model', 'archive', 'Weidner\\Blog\\ArchivePage');
