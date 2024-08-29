<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Showcase extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('showcase');

    // prettier-ignore
    $fields
      ->addText('eyebrow')
      ->addRepeater('labels')
        ->addText('label')
      ->endRepeater()
      ->addText('header')
      ->addField('copy', 'acfe_block_editor')
      ->addImage('image')
      ->addRepeater('stats')
        ->addText('stat')
        ->addText('label')
      ->endRepeater();

    return $fields;
  }
}
