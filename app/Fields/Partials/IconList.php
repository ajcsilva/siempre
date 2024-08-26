<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class IconList extends Partial {
  /**
   * The partial field group.
   */
  public function fields(): Builder {
    $fields = Builder::make('icon_list');

    $fields->addSelect('icon', [
      'choices' => [
        'instagram' => 'Instagram',
        'facebook' => 'Facebook',
        'apple' => 'Apple',
        'spotify' => 'Spotify',
        'envelope' => 'Envelope',
        'link' => 'Link',
        'heroicon-m-face-smile' => 'Happy Face',
      ],
    ]);

    return $fields;
  }
}
