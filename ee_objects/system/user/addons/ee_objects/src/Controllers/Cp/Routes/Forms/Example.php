<?php
namespace EeObjects\Addon\Controllers\Cp\Routes\Forms;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;
use EeObjects\Addon\Forms\EveryOption;

use EeObjects\Forms\Form;


class Example extends AbstractRoute
{
    protected $route_path = 'forms/example';

    public function process($id = false): \EeObjects\Controllers\Cp\AbstractRoute
    {
        $form = new Form;
        $form->asTab();
        $form->asFileUpload();
        $field_group = $form->getGroup('header 1');
        $field_set = $field_group->getFieldSet('first_name');
        $field = $field_set->getField('first_name', 'text')
            ->setDisabled(true)
            ->setValue('Eric');

        $field_set = $field_group->getFieldSet('last_name')->withButton('Click Me');
        $field = $field_set->getField('last_name', 'text')
            ->setPlaceholder('Last Name')
            ->setRequired(true);
        $form->setCpPageTitle('Hello!');

        $field_group = $form->getGroup('header 2');
        $field_set = $field_group->getFieldSet('email');
        $field = $field_set->getField('email', 'text')
            ->setPlaceholder('Your Email Address')
            ->setValue('eric@mithra62.com');

        $field_group = $form->getGroup('Contact details');
        $field_set = $field_group->getFieldSet('Address');
        $field = $field_set->getField('address1', 'text');
        $field = $field_set->getField('address2', 'action_button')->setText('Hello');
        $field = $field_set->getField('state', 'dropdown')->withNoResults('Nothing Here', 'fdsa', 'fdsa');

        $form->withActionButton('My Action Button', 'https://google.com');
        $button = $form->getButton('button_1');
        $button->setType('submit')->setText('Submit Button')->setWorking('Submitting...');
        $button = $form->getButton('button_2');
        $form->removeButton('button_2');

        $hidden_field = $form->getHiddenField('my_hidden_field');
        $hidden_field->setValue('my_value');

        $test_form = $form->toArray();

        $this->setBody('form', $test_form);

        return $this;
        $form = new EveryOption();
        $vars = [
            'sections' => $form->generate(),
            'save_btn_text' => 'save',
            'save_btn_text_working' => 'saving',
            'ajax_validate' => true,
            'has_file_input' => true,
            'alerts_name' => '',
            'form_hidden' => [],
            'cp_page_title_alt' => 'Hello',
            'cp_page_title' => 'Will not show',
            'action_button' => [
                'rel' => 'fdsa',
                'href' => 'hh',
                'text' => 'fdsafdsafdsa',
            ],
            'hide_top_buttons' => true, //note if 'action_button' is defined this is ignored
            'extra_alerts' => [
                'custom-alert-1',
                'custom-alert-2'
            ],
            'buttons' => [
                [
                    'shortcut' => '',
                    'attrs' => '',
                    'value' => 'ButtonValue',
                    'text' => 'ButtonText',
                    'name' => 'button_name',
                    'type' => 'submit', //|button|reset
                    'class' => '',
                    'html' => 'I do not konw what this does',//prepends to 'text' value
                    'working' => 'working',
                ],
                [
                    'shortcut' => '',
                    'attrs' => '',
                    'value' => 'ButtonValue',
                    'text' => 'Different ButtonText',
                    'name' => 'button_name2',
                    'type' => 'reset', //|button|reset
                    'class' => '',
                    'working' => 'working too', //interestingly, when any button clicked all working states activate
                    'html' => '<strong>my custom button HTML</strong>'
                ]
            ],
            'base_url' => $this->url($this->getRoutePath($id))
        ];

        $this->setBody('form', $test_form);

        return $this;
    }
}