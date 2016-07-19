<?php

namespace Weidner\Blog;

use Page;

/**
 * Archive Page Model
 *
 * A page model that extends the default page object provided by Kirby for all
 * content files using the archive template.
 *
 * @author  Daniel Weidner <hallo@danielweidner.de>
 * @package Weidner\Blog
 * @since   1.0.0
 */
class ArchivePage extends Page {

  /**
   * Find all articles added to the current archive page.
   *
   * @return Collection
   */
  public function articles() {
    return $this->children()->visible()->filterBy('intendedTemplate', 'article');
  }

}
