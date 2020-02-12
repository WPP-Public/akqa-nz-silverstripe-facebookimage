<?php

namespace WT\FacebookImage;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Control\Controller;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;

class PageFacebookImageExtension extends DataExtension
{
    private static $has_one = array(
        'FacebookImage' => Image::class,
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Facebook',
            $uf = new UploadField('FacebookImage', 'Facebook image for facebook share')
        );

        $uf->setFolderName('FacebookImages/');
    }

    /**
     * @return mixed
     */
    public function FacebookImageWithFallback()
    {
        return $this->owner->FacebookImageID
            ? $this->owner->FacebookImage()
            : SiteConfig::current_site_config()->FacebookImage();
    }

    /**
     * @return HTMLText
     */
    public function FacebookMetaTags()
    {
        return Controller::curr()->renderWith('FacebookMetaTags');
    }
}
