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
        $field_set->getField('first_name', 'text')
            ->setDisabled(true)
            ->setValue('Eric');

        $field_set = $field_group->getFieldSet('last_name')->withButton('Click Me');
        $field_set->getField('last_name', 'text')
            ->setPlaceholder('Last Name')
            ->setRequired(true);
        $form->setCpPageTitle('Hello!');

        $field_group = $form->getGroup('Custom Input Example');
        $field_set = $field_group->getFieldSet('email');
        $field_set->getField('email', 'email')
            ->setPlaceholder('Your Email Address')
            ->setValue('eric@mithra62.com')
            ->setRequired(true);

        $field_set = $field_group->getFieldSet('color');
        $field_set->getField('color', 'color')->setValue('#C86565');

        $field_set = $field_group->getFieldSet('number');
        $field_set->getField('number', 'number')->params(['min' => 100, 'max' => 1000])->setRequired(true);

        $field_group = $form->getGroup('Contact details');
        $field_set = $field_group->getFieldSet('Address');
        $field_set->getField('address1', 'text');
        $field_set->getField('address2', 'action_button')->setText('Hello');
        $field_set->getField('state', 'dropdown')->withNoResults('Nothing Here', 'fdsa', 'fdsa');

        $form->withActionButton('My Action Button', 'https://google.com');
        $button = $form->getButton('button_1');
        $button->setType('submit')->setText('Submit Button')->setWorking('Submitting...');

        $form->getButton('button_2');
        $form->removeButton('button_2');

        $hidden_field = $form->getHiddenField('my_hidden_field');
        $hidden_field->setValue('my_value');

        $field_group = $form->getGroup('Table Example');
        $field_set = $field_group->getFieldSet('My Table Data');
        $table = $field_set->getField('my_table', 'table');

        $table->setOptions([
            'lang_cols' => true,
            'class' => 'product_channels'
        ]);

        $table->setColumns([
            'details' => ['sort' => false],
            'value' => ['sort' => false],
        ]);

        $table->setNoResultsText(sprintf(lang('no_found'), lang('product_channels')));
        $table->setBaseUrl( ee('CP/URL')->make($this->base_url ));
        $data = [];
        $data[] = [
            'Hello',
            'You',
        ];

        $table->setData($data);
        $table->addRow([
            'No, Hello',
            'To You!',
        ]);

        $field_group = $form->getGroup('Filepicker Example');
        $field_set = $field_group->getFieldSet('My Filepicker');
        $file_picker = $field_set->getField('my_file_picker', 'file-picker');
        $file_picker->asImage()->withDir(7)->setValue('{filedir_7}path.jpg');

        $field_group = $form->getGroup('Grid Example');
        $field_set = $field_group->getFieldSet('My Grid')->withGrid();
        $grid = $field_set->getField('my_grid_field', 'grid');

        $grid->setOptions([
            'field_name' => $grid->getName(),
            'reorder'    => true,
        ]);

        $grid->setColumns([
            'text example' => ['sort' => false],
            'select example' => ['sort' => false],
            'password example' => ['sort' => false],
            'checkbox example' => ['sort' => false],
            'textarea example' => ['sort' => false],
            'upload example' => ['sort' => false],
        ]);

        $options = ['foo' => 'Foo', 'bar' => 'Bar'];
        $cols = [
            ['name' => 'foo-text', 'type' => 'text', 'value' => ''],
            ['name' => 'barr-select', 'type' => 'select', 'value' => '', 'choices' => $options],
            ['name' => 'foo-password', 'type' => 'password', 'value' => ''],
            ['name' => 'bar-checkbox', 'type' => 'checkbox', 'value' => 1],
            ['name' => 'foo-textarea', 'type' => 'textarea', 'value' => '', 'cols' => 2, 'rows' => 5],
            ['name' => 'bar-upload', 'type' => 'file', 'value' => '', 'cols' => 2, 'rows' => 5],
        ];
        $grid->defineRow($cols);
        $grid->setData([
            ['foo-text' => 'bar', 'barr-select' => 'foo', 'foo-password' => 'fdsa', 'bar-checkbox' => 1, 'foo-textarea' => '', 'bar-upload' => ''],
            ['foo-text' => 'fdsafdsa', 'barr-select' => 'bar', 'foo-password' => 'fdsa', 'bar-checkbox' => true, 'foo-textarea' => '', 'bar-upload' => '']
        ]);

        $grid->setNoResultsText(sprintf(lang('no_found'), lang('table-thing')), 'add');
        $grid->setBaseUrl( ee('CP/URL')->make($this->base_url ));

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