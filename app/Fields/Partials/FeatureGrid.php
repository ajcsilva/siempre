<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class FeatureGrid extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('feature_grid');

    // prettier-ignore
    $fields
      ->addText('header')
      ->addRepeater('features')
        ->addText('header')
        ->addTextarea('copy')
        ->addPartial(IconList::class)
      ->endRepeater();

    return $fields;
  }
}
