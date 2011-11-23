<?
	defined('C5_EXECUTE') or die(_("Access Denied."));
	class AddthisBlockController extends BlockController {
		
		var $pobj;
		 
		protected $btTable = 'btAddThis';
		protected $btInterfaceWidth = "400";
		protected $btInterfaceHeight = "180";
		
		public $username = '';
		public $display = ''; 
		
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Makes it easy for your visitors to bookmark and share your content with others.");
		}
		
		public function getBlockTypeName() {
			return t("AddThis");
		}
		
		public function getJavaScriptStrings() {
			return array(); //array('youtube-required' => t('Please enter a valid Youtube URL.'));
		}
		
		function __construct($obj = null) {		
			parent::__construct($obj);	 
			if(!$this->display) $this->display='shareLong';
		}
		
		function view(){ 
			$this->set('addThisUsername', $this->username);	
			$this->set('addThisDisplay', $this->display); 
		}
		
		function save($data) { 
			$args['username'] = isset($data['username']) ? trim($data['username']) : '';
			$args['display'] = isset($data['display']) ? trim($data['display']) : '';			
			parent::save($args);
		}
		
	}
	
?>