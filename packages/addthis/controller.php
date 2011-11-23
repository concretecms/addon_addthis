<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class AddthisPackage extends Package {

	protected $pkgHandle = 'addthis';
	protected $appVersionRequired = '5.2.0';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Makes it easy for your visitors to bookmark and share your content with others.");
	}
	
	public function getPackageName() {
		return t("AddThis");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('addthis', $pkg);		
	}

}