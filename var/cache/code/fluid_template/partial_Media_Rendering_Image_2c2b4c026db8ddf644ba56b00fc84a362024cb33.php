<?php

class partial_Media_Rendering_Image_2c2b4c026db8ddf644ba56b00fc84a362024cb33 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'ai' => 
  array (
    0 => 'C1\\AdaptiveImages\\ViewHelpers',
  ),
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
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
      ';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\RatioBoxViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
<picture class="loader">
      <source media="(max-width: 767px)"
              data-srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['file'] = NULL;
$arguments6['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments6['cropVariant'] = 'default';
$arguments6['debug'] = false;
$arguments6['absolute'] = false;
$array8 = array (
);$arguments6['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array8);
$arguments6['cropVariant'] = 'mobile';
$arguments6['widths'] = '360,480,580,660,768';
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);

$output5 .= C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '"
              srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['file'] = NULL;
$arguments12['cropVariant'] = 'default';
$arguments12['content'] = '';
$arguments12['embedPreview'] = false;
$arguments12['embedPreviewWidth'] = 64;
$arguments12['embedPreviewAdditionalParameters'] = '-quality 50 -sampling-factor 4:2:0 -strip -posterize 136 -colorspace sRGB -unsharp 0.25x0.25+8+0.065 -despeckle -noise 5';
$array14 = array (
);$arguments12['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array14);
$arguments12['cropVariant'] = 'mobile';

$output5 .= C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output5 .= ' 1w"
              sizes=\'';
$array15 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizesAttr', $array15)]);

$output5 .= '\'
              data-sizes="auto"
      >
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['aria'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['alt'] = NULL;
$arguments16['file'] = NULL;
$arguments16['additionalConfig'] = array (
);
$arguments16['width'] = NULL;
$arguments16['height'] = NULL;
$arguments16['cropVariant'] = 'default';
$arguments16['fileExtension'] = NULL;
$arguments16['loading'] = NULL;
$arguments16['decoding'] = NULL;
$array18 = array (
);$arguments16['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array18);
$arguments16['class'] = 'image-embed-item lazyload img-responsive';
$array19 = array (
);$arguments16['width'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array19);
$array20 = array (
);$arguments16['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array20);
$array21 = array (
);$arguments16['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array21);
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['img-debug'] = $renderingContext->getVariableProvider()->getByPath('jsdebug', $array23);
$array22['sizes'] = 'auto';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['file'] = NULL;
$arguments24['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments24['cropVariant'] = 'default';
$arguments24['debug'] = false;
$arguments24['absolute'] = false;
$array26 = array (
);$arguments24['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array26);
$arguments24['widths'] = '360,480,580,660,768,992,1024,1280,1440,1920';
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$array22['srcset'] = C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
$arguments16['data'] = $array22;
// Rendering Array
$array30 = array();
$array30['sizes'] = '100vw';
$output31 = '';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['file'] = NULL;
$arguments32['cropVariant'] = 'default';
$arguments32['content'] = '';
$arguments32['embedPreview'] = false;
$arguments32['embedPreviewWidth'] = 64;
$arguments32['embedPreviewAdditionalParameters'] = '-quality 50 -sampling-factor 4:2:0 -strip -posterize 136 -colorspace sRGB -unsharp 0.25x0.25+8+0.065 -despeckle -noise 5';
$array34 = array (
);$arguments32['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array34);

$output31 .= C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= ' 1w';
$array30['srcset'] = $output31;
$arguments16['additionalAttributes'] = $array30;

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output5 .= '
  </picture>
';
return $output5;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['file'] = NULL;
$arguments1['mediaQueries'] = array (
  0 => 
  array (
    'default' => '',
  ),
);
$array3 = array (
);$arguments1['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array3);
// Rendering Array
$array4 = array();
$array4['mobile'] = '(max-width:767px)';
$array4['default'] = '';
$arguments1['mediaQueries'] = $array4;

$output0 .= C1\AdaptiveImages\ViewHelpers\RatioBoxViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#