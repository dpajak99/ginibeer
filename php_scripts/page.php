<?php
	class Page {
		public $title;
		public $link;
		public function setPageTitle($name) {
			if($name == '' || $name == null || !isset($name)){
				$this -> title = "Start";
				$this -> link = "start";
			} else {
				$this -> title = $name;
				$this -> link = $name;
			}
		}
		
		public function getPageTitle() {
			return "Ginibeer | " . $this -> title;  
		}
		
		public function getPageLink() {
			return $this -> link;  
		}
	}
?>