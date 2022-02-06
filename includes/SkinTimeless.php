<?php
/**
 * SkinTemplate class for the Timeless skin
 *
 * @ingroup Skins
 */
class SkinTimeless extends SkinTemplate {
	/**
	 * @inheritDoc
	 */
	public function __construct(
		array $options = []
	) {
		$out = $this->getOutput();

		// Basic IE support without flexbox
		$out->addStyle( $this->stylename . '/resources/IE9fixes.css', 'screen', 'IE' );

		parent::__construct( $options );
	}
}
