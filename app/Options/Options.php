<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;

use App\Options\Partials\Recent;
use App\Options\Partials\Header;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Options extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Zarządzanie motywem';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Zarządzanie motywem | Ustawienia';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $options = new FieldsBuilder('options');

        $options
           
            ->addTab('footer_tab', ['label' => 'Stopka'])
                ->addGroup('footer', ['label' => 'Stopka'])
                    ->addText('facebook', ['label' => 'Link do Facebooka'])
                    ->addText('instagram', ['label' => 'Link do Instagrama'])
                    ->addText('youtube', ['label' => 'Link do Youtube'])
                    ->addWysiwyg('contact-information', ['label' => 'Informacje kontaktowe'])
                    ->addText('email', ['label' => 'Email'])
                ->endGroup()
            ->addTab('dodatkowe_skrypty_tab', ['label' => 'Dodatkowe skrypty'])
                ->addTextarea('head', ['label' => 'Kod w sekcji head'])
                ->addTextarea('body', ['label' => 'Kod w sekcji body (przed zamknięciem body)'])

                ;

        return $options->build();
    }
}
