<?php

namespace App\Fields;

use App\Fields\Partials\CopyMarquee;
use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Page extends Field {
  /**
   * The field group.
   */
  public function fields(): array {
    $fields = Builder::make('page');

    $fields->setLocation('post_type', '==', 'page');

    // prettier-ignore
    $fields
      ->addTab('General')
        ->addFlexibleContent('hero', [
          'min' => 1,
          'max' => 1,
        ])
          ->addLayout(CopyMarquee::class)
        ->endFlexibleContent()
      ->addTab('Advanced')
        ->addSelect('layout', [
          'choices' => [
            'app' => 'Default',
            'shell' => 'Shell',
          ],
          'default_value' => 'app',
        ]);

    return $fields->build();
  }
}
