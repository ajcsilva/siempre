<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class FlexibleContent extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('flexible_content');

    // prettier-ignore
    $fields
      ->addFlexibleContent('content')
        ->addLayout(FeatureGrid::class)
        ->addLayout(Form::class)
        ->addLayout(Pricing::class)
        ->addLayout(Showcase::class)
      ->endFlexibleContent();

    return $fields;
  }
}
