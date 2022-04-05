<?php
namespace EeObjects\Addon\Forms;

use EeObjects\Forms\AbstractForm;

class EveryOption extends AbstractForm
{
    public function generate(): array
    {
        $form = [
            [
                'title' => 'Field Lable',
                'desc' => 'Field Description',
                'desc_cont' => 'More Details',
                'example' => 'An example would be here',
                'fields' => [
                    'tax_name' => [
                        'margin_top' => false,
                        'margin_left' => false,
                        'name' => 'tax_name',
                        'note' => 'Here\'s my note stuff',
                        'class' => '',
                        'attrs' => '',
                        'maxlength' => '2',
                        'no_results' => [ //only available for 'select'
                            'text'=> 'hell',
                            'link_href' => 'fdsa',
                            'link_text' => 'fdsafdsa',
                        ],
                        'placeholder' => 'My Placeholder',
                        'disabled' => false,
                        'choices' => [0 => 1, 1=> 2, 2=> 3, 3=>  4, 5=> 6],
                        'type' => 'dropdown',
                        'reorderable' => true,
                        //'disabled_choices' => [1,2],
                        'removable' => true,
                        'value' => $this->get('tax_name'),
                    ],
                ],
                'button' => [ //only one per field (apparently)
                    'text' => 'hello',
                    'rel' => '',
                    'for' => '',//adds to the data-for attribute
                ]
            ],

            ];

        return [$form];
    }
}