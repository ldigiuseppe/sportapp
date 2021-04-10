<?php

namespace SportApp\DataObjects;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\TextField;
use TractorCow\Colorpicker\Color;

class Team extends DataObject
{

    private static $table_name = 'Team';

    private static $db = [
        'Name' => 'Varchar(255)',
        'Colour' => Color::class,
        'MascotName' => 'Varchar(255)',
        'Sport' => 'Varchar(255)',
        'Region' => 'Varchar(255)',
        'Season' => 'Enum("Summer,Winter,Spring,Autumn")',
    ];

    private static $has_one = [
        'Logo' => Image::class,
    ];

    private static $many_many = [
        "Sportmen" => Sportman::class,
    ];

    const SPORTS = [
        'Rugby' => 'Rugby',
        'Cricket' => 'Cricket',
    ];

    const REGIONS = [
        'National' => 'National',
        'Regional' => 'National',
    ];

    /**
     *  Modify CMS fields
     *
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.Main',
            [
                DropdownField::create('Region', 'Region', self::REGIONS),
                DropdownField::create('Sport', 'Sport', self::SPORTS),
                $mascotNameField = TextField::create('MascotName', 'Mascot Name'),
                $logo = UploadField::create('Logo', 'Logo'),
            ],
            'Colour'
        );

        $mascotNameField->displayIf("Sport")->isEqualTo("Rugby");
        $logo->displayIf("Sport")->isEqualTo("Cricket");

        return $fields;
    }
}
