<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class CopyMarquee extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('copy_marquee');

    // prettier-ignore
    $fields
      ->addTab('General')
        ->addFlexibleContent('body')
          ->addLayout('copy')
            ->addField('copy', 'acfe_block_editor')
          ->addLayout('copy_column')
            ->addRepeater('copy_column')
              ->addPartial(IconList::class)
              ->addField('copy', 'acfe_block_editor')
            ->endRepeater()
          ->addLayout('icons')
            ->addRepeater('icons')
              ->addPartial(IconList::class)
              ->addUrl('link')
            ->endRepeater()
        ->endFlexibleContent()
      ->addTab('Top Marquee')
        ->addRepeater('top_marquee')
          ->addText('item')
        ->endRepeater()
      ->addTab('Bottom Marquee')
        ->addRepeater('bottom_marquee')
          ->addText('item')
        ->endRepeater();

    return $fields;
  }
}
