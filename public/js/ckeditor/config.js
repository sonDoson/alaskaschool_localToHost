/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.filebrowserBrowseUrl = 'http://alaska.edu.vn/js/ckfinder/ckfinder.html';
 
	config.filebrowserImageBrowseUrl = 'http://alaska.edu.vn/js/ckfinder/ckfinder.html?type=Images';
 
	config.filebrowserFlashBrowseUrl = 'http://alaska.edu.vn/js/ckfinder/ckfinder.html?type=Flash';
 
	config.filebrowserUploadUrl = 'http://alaska.edu.vn/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
 
	config.filebrowserImageUploadUrl = 'http://alaska.edu.vn/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
 
	config.filebrowserFlashUploadUrl = 'http://alaska.edu.vn/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
