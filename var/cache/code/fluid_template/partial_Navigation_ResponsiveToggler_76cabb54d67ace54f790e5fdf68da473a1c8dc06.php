<?php

class partial_Navigation_ResponsiveToggler_76cabb54d67ace54f790e5fdf68da473a1c8dc06 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
    2 => NULL,
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'ai' => 
  array (
    0 => 'C1\\AdaptiveImages\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '<button class="navbar-toggler p-0 position-absolute" 
id="menu-icon"
type="button" 
data-bs-toggle="collapse" 
data-bs-target="#navbarNavDropdown" 
aria-controls="navbarNavDropdown" 
aria-expanded="false" 
aria-label="Toggle navigation"
href="#menu">

<span class="toggle-button">
    <span class="icon-bar bg-coal top-bar"></span>
    <span class="icon-bar bg-coal middle-bar"></span>
    <span class="icon-bar bg-coal bottom-bar"></span>
</span>
</button>

';
}


}
#