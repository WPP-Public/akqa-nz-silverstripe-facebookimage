<?php

namespace Heyday\FacebookImage;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Control\Controller;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;

class PageFacebookImageExtension extends DataExtension
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
