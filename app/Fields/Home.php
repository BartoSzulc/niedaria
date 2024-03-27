<?php

namespace App\Fields;

use App\Fields\Partials\Home\Hero;
// use App\Fields\Partials\Home\About;
// use App\Fields\Partials\Home\Offer;
// use App\Fields\Partials\Home\Contact;
// use App\Fields\Partials\Home\Video;
// use App\Fields\Partials\Home\SocialMedia;
// use App\Fields\Partials\Home\Catalog;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Home extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $home = new FieldsBuilder('home', ['title' => 'Sekcje z polami do wypełnienia']);

        $home
            ->setLocation('page_type', '==', 'front_page');
        $home
        ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
            ->addFields($this->get(Hero::class))
        ->addTab('about', ['label' => 'About us', 'placement' => 'left'])
        ;

        return $home->build();
    }
}
