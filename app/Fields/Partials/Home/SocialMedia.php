<?php

namespace App\Fields\Partials\Home;

use App\Options\Partials\Buttons;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SocialMedia extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $socialmedia = new FieldsBuilder('socialmedia');

        $socialmedia
            ->addGroup('socialmedia', ['label' => 'Social media'])
                ->addWysiwyg('title', ['label' => 'Nagłówek sekcji'])
                ->addWysiwyg('content', ['label' => 'Treść'])
                ->addLink('facebook', ['label' => 'Facebook'])
                ->addGallery('gallery', ['label' => 'Zdjęcia', 'return_format' => 'id', 'max' => 4])
            ->endGroup();

        return $socialmedia;
    }
}