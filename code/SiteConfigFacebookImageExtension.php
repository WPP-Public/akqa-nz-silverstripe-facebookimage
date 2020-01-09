<?php

namespace WT\FacebookImage;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class SiteConfigFacebookImageExtension extends DataExtension
{
    private static $has_one = array(
        'FacebookImage' => Image::class,
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Facebook',
            $uf = new UploadField('FacebookImage', 'Default Facebook image for facebook share'),
        );

        $uf->setFolderName('FacebookImages/');
    }

} 
