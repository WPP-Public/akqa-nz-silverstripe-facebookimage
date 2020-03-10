<?php

namespace WT\FacebookImage;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class SiteConfigFacebookImageExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $has_one = [
        'FacebookImage' => Image::class,
    ];

    /**
     * @var array
     */
    private static $owns = [
        'FacebookImage',
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Facebook',
            $uf = new UploadField('FacebookImage', 'Default Facebook image for facebook share'),
        );

        $uf->setFolderName('FacebookImages/');
    }

} 
