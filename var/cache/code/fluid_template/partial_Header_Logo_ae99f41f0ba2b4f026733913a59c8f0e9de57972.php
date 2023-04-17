<?php

class partial_Header_Logo_ae99f41f0ba2b4f026733913a59c8f0e9de57972 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="position-relative ar-lg logo mt-18 mt-lg-0 ms-20 me-50 me-md-0">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
          <picture class="lazyload position-absolute top-0 start-0 w-100 h-100">
            <source media="(min-width: 768px)" srcset="';
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
$arguments4['src'] = 'EXT:setup_package/Resources/Public/Images/business2.png';
$arguments4['width'] = 150;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '" />
            <source media="(min-width: 300px)" srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['src'] = '';
$arguments6['treatIdAsReference'] = false;
$arguments6['image'] = NULL;
$arguments6['crop'] = NULL;
$arguments6['cropVariant'] = 'default';
$arguments6['fileExtension'] = NULL;
$arguments6['width'] = NULL;
$arguments6['height'] = NULL;
$arguments6['minWidth'] = NULL;
$arguments6['minHeight'] = NULL;
$arguments6['maxWidth'] = NULL;
$arguments6['maxHeight'] = NULL;
$arguments6['absolute'] = false;
$arguments6['src'] = 'EXT:setup_package/Resources/Public/Images/business2.png';
$arguments6['width'] = 100;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= '" />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['aria'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['alt'] = NULL;
$arguments8['ismap'] = NULL;
$arguments8['longdesc'] = NULL;
$arguments8['usemap'] = NULL;
$arguments8['loading'] = NULL;
$arguments8['decoding'] = NULL;
$arguments8['src'] = '';
$arguments8['treatIdAsReference'] = false;
$arguments8['image'] = NULL;
$arguments8['crop'] = NULL;
$arguments8['cropVariant'] = 'default';
$arguments8['fileExtension'] = NULL;
$arguments8['width'] = NULL;
$arguments8['height'] = NULL;
$arguments8['minWidth'] = NULL;
$arguments8['minHeight'] = NULL;
$arguments8['maxWidth'] = NULL;
$arguments8['maxHeight'] = NULL;
$arguments8['absolute'] = false;
$arguments8['src'] = 'EXT:setup_package/Resources/Public/Images/business2.png';
$arguments8['alt'] = 'eBusiness';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '      
          </picture>
      ';
return $output3;
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
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = NULL;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['section'] = NULL;
$arguments1['linkAccessRestrictedPages'] = NULL;
$arguments1['additionalParams'] = NULL;
$arguments1['absolute'] = NULL;
$arguments1['addQueryString'] = NULL;
$arguments1['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1['pageUid'] = 1;
$arguments1['class'] = 'navbar-brand me-0';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '.logo {width: 100px;} @media (min-width: 768px) {.logo {width: 150px;}}.ar-lg {aspect-ratio: 50/17;}';
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['as'] = NULL;
$arguments10['crossorigin'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['href'] = NULL;
$arguments10['hreflang'] = NULL;
$arguments10['importance'] = NULL;
$arguments10['integrity'] = NULL;
$arguments10['media'] = NULL;
$arguments10['referrerpolicy'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['sizes'] = NULL;
$arguments10['type'] = NULL;
$arguments10['nonce'] = NULL;
$arguments10['identifier'] = NULL;
$arguments10['priority'] = false;
$arguments10['identifier'] = 'logo';
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array12['0'] = 'true';

$expression13 = function($context) {return TRUE;};
$arguments10['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '  ';

return $output0;
}


}
#