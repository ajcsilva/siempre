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
        'checkmark' => 'Checkmark',
        'add' => 'Add',
        'thumbs-up' => 'Thumbs Up',
        'privacy' => 'Privacy',
        'verified' => 'Verified',
        'data-sourcing' => 'Data Sourcing',
        'development' => 'Development',
        'wordpress' => 'WordPress',
      ],
    ]);

    return $fields;
  }
}
