<?php
namespace webcrew;
class Webcrew extends \stdClass {

// properties
	private $authors=[
		"WEBJASIEK Tomasz Jaśniewski",
		"Patryk Prusinowski",
		"Zbyszek Trzcinka (soon arrives at the port)",
	];

//methods
	function __construct() {
		e(get_called_class(),eol);
	}
	function authors() {
		return browse($this->authors,1,"\n");
	}

}
?>