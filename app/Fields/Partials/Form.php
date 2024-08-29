<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Form extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('form');

    // prettier-ignore
    $fields
      ->addText('header')
      ->addField('copy', 'acfe_block_editor')
      ->addField('form', 'forms');

    return $fields;
  }
}
