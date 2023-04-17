<?php

class partial_Content_BackgroundImage_Picture_de178400c57707979a6c3091be7fdc9072902a03 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
      <div class="position-relative p-0 mb-0 my-0 ar-hd">
<picture class="position-absolute top-0 start-0 w-100 h-100">
    <source srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['src'] = '';
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['fileExtension'] = NULL;
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$array3 = array (
);$arguments1['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array3);
$arguments1['maxWidth'] = 1600;
$arguments1['cropVariant'] = 'headerdesktop';
$arguments1['fileExtension'] = 'webp';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" media="(min-width: 768px)" >
    <source srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['src'] = '';
$arguments4['treatIdAsReference'] = false;
$arguments4['image'] = NULL;
$arguments4['crop'] = NULL;
$arguments4['cropVariant'] = 'default';
$arguments4['fileExtension'] = NULL;
$arguments4['width'] = NULL;
$arguments4['height'] = NULL;
$arguments4['minWidth'] = NULL;
$arguments4['minHeight'] = NULL;
$arguments4['maxWidth'] = NULL;
$arguments4['maxHeight'] = NULL;
$arguments4['absolute'] = false;
$array6 = array (
);$arguments4['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array6);
$arguments4['maxWidth'] = 767;
$arguments4['cropVariant'] = 'headermobile';
$arguments4['fileExtension'] = 'webp';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '" media="(max-width: 767px)">
    <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['src'] = '';
$arguments7['treatIdAsReference'] = false;
$arguments7['image'] = NULL;
$arguments7['crop'] = NULL;
$arguments7['cropVariant'] = 'default';
$arguments7['fileExtension'] = NULL;
$arguments7['width'] = NULL;
$arguments7['height'] = NULL;
$arguments7['minWidth'] = NULL;
$arguments7['minHeight'] = NULL;
$arguments7['maxWidth'] = NULL;
$arguments7['maxHeight'] = NULL;
$arguments7['absolute'] = false;
$array9 = array (
);$arguments7['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array9);
$arguments7['maxWidth'] = 1280;
$arguments7['cropVariant'] = 'headerdesktop';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '" alt="';
$array10 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.alternative', $array10)]);

$output0 .= '">
</picture>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return '.ar-hd {aspect-ratio: 16/9;}@media (min-width: 768px) {.ar-hd {aspect-ratio: 24/7;}}';
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['aria'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['as'] = NULL;
$arguments11['crossorigin'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['href'] = NULL;
$arguments11['hreflang'] = NULL;
$arguments11['importance'] = NULL;
$arguments11['integrity'] = NULL;
$arguments11['media'] = NULL;
$arguments11['referrerpolicy'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['sizes'] = NULL;
$arguments11['type'] = NULL;
$arguments11['nonce'] = NULL;
$arguments11['identifier'] = NULL;
$arguments11['priority'] = false;
$arguments11['identifier'] = 'bgimage';
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = 'true';

$expression14 = function($context) {return TRUE;};
$arguments11['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#