# SilverStripe Facebook Image

This version supports SilverStripe 4, see the 0.1 release for a SilverStripe 3 compatible version and the 0.0 release for a SilverStripe 2.4 compatible version.

Provides an Image Field for use when sharing pages on facebook.

This extension provides fields in both the SiteConfig and on Page. The SiteConfig image is the default fallback for all pages but one can customise which image appears on each individual page by using that page's facebook image field.


## Installation (with composer)

	$ composer require heyday/silverstripe-facebookimage

## Usage

```html
<html>
	<head>
	$FacebookMetaTags
	</head>
	<body>
		<p>Hello, world!</p>
	<body>
</html>
```

Just use the $FacebookMetaTags variable in your silverstripe template in the <head> section.

##License

SilverStripe Facebook Image Extension is licensed under an [MIT license](http://heyday.mit-license.org/)
