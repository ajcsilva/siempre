<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Hero extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('hero');

    // prettier-ignore
    $fields
      ->addFlexibleContent('hero', [
        'min' => 1,
        'max' => 1,
      ])
        ->addLayout(CopyMarquee::class)
        ->addLayout(SplashHero::class)
      ->endFlexibleContent();

    return $fields;
  }
}
