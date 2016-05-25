<?php

class Element_Textarea extends Element {
	protected $_attributes = array( "rows" => "5" );

	public function render() {
		echo '<div class="bf-input"><textarea', $this->getAttributes( "value" ), '>';
		if ( ! empty( $this->_attributes["value"] ) ) {
			echo $this->filter( $this->_attributes["value"] );
		}
		echo '</textarea></div>';
	}
}
