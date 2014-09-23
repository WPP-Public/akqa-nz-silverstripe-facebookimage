<?php

class SiteConfigFacebookImageExtension extends DataExtension
{
    private static $has_one = array(
        'FacebookImage' => 'Image'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Facebook', $uf = new UploadField('FacebookImage', 'Default Facebook image for facebook share'));
        $uf->setFolderName('FacebookImages/');
    }

} 