<?php

class PageFacebookImageExtension extends DataExtension
{
    public function extraStatics($class = null, $extension = null)
    {
        return array(
            'has_one' => array(
                'FacebookImage' => 'Image'
            )
        );
    }

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Content.Facebook', $uf = new UploadField('FacebookImage', 'Facebook image for facebook share'));
        $uf->setFolderName('FacebookImages/');
    }

    /**
     * @return mixed
     */
    public function FacebookImageWithFallback()
    {
        return $this->FacebookImageID ? $this->FacebookImage() : SiteConfig::current_site_config()->FacebookImage();
    }

    /**
     * @return HTMLText
     */
    public function FacebookMetaTags()
    {
        return Controller::curr()->renderWith('FacebookMetaTags');
    }
}