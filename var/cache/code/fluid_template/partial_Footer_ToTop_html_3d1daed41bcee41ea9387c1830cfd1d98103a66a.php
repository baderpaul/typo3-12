<?php

class partial_Footer_ToTop_html_3d1daed41bcee41ea9387c1830cfd1d98103a66a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '<a id="backtotop" 
        class="border border-white btn btn-primary d-inline-block scroll-to-top-btn" 
        aria-label="Scroll to top" 
        href="#">
    <i class="bi bi-chevron-up text-white scroll-to-top-link"></i> 
    <span class="visually-hidden"  aria-hidden="true">Back to Top Button</span>
</a>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '
    function togtop () {
      if (window.scrollY >= 100) {
        document.getElementById("backtotop").classList.add("show-scroll-btn");
      } else {
        document.getElementById("backtotop").classList.remove("show-scroll-btn");
      }
    }
    window.addEventListener("scroll", togtop);
    window.addEventListener("resize", togtop);
';
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['async'] = NULL;
$arguments1['crossorigin'] = NULL;
$arguments1['defer'] = NULL;
$arguments1['integrity'] = NULL;
$arguments1['nomodule'] = NULL;
$arguments1['nonce'] = NULL;
$arguments1['referrerpolicy'] = NULL;
$arguments1['src'] = NULL;
$arguments1['type'] = NULL;
$arguments1['identifier'] = NULL;
$arguments1['priority'] = false;
$arguments1['identifier'] = 'scrollbtn';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

return $output0;
}


}
#