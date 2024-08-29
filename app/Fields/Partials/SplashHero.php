<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class SplashHero extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('splash_hero');

    // prettier-ignore
    $fields
      ->addField('copy', 'acfe_block_editor');

    return $fields;
  }
}
