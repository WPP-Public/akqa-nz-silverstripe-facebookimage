<?php

class SiteConfigFacebookImageExtension extends DataExtension
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
        $fields->addFieldToTab('Root.Facebook', $uf = new UploadField('FacebookImage', 'Default Facebook image for facebook share'));
        $uf->setFolderName('FacebookImages/');
    }

} 