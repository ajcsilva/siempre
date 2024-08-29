<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Pricing extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('pricing');

    // prettier-ignore
    $fields
      ->addText('header')
      ->addFlexibleContent('body')
        ->addLayout('price_table')
          ->addText('price')
          ->addText('subscript')
          ->addRepeater('items')
            ->addPartial(IconList::class)
            ->addText('item')
          ->endRepeater()
        ->addLayout('divider')
          ->addText('text')
      ->endFlexibleContent();

    return $fields;
  }
}
