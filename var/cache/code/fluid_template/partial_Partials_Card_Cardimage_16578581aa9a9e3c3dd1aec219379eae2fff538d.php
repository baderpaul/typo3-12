<?php

class partial_Partials_Card_Cardimage_16578581aa9a9e3c3dd1aec219379eae2fff538d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\RatioBoxViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
         <picture class="loader">
             <source media="(max-width: 1920px)"
                     srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['file'] = NULL;
$arguments10['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments10['cropVariant'] = 'default';
$arguments10['debug'] = false;
$arguments10['absolute'] = false;
$array12 = array (
);$arguments10['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array12);
$arguments10['cropVariant'] = 'card';
$arguments10['widths'] = 360;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output9 .= C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '">          
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
$arguments16['class'] = 'lazyload img-fluid card-img-top';
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
$arguments16['data'] = $array22;
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['sizes'] = $renderingContext->getVariableProvider()->getByPath('sizesAttr', $array25);
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['file'] = NULL;
$arguments26['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments26['cropVariant'] = 'default';
$arguments26['debug'] = false;
$arguments26['absolute'] = false;
$array28 = array (
);$arguments26['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array28);
$arguments26['widths'] = 360;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$array24['srcset'] = C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
$arguments16['additionalAttributes'] = $array24;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output9 .= '
         </picture>
     ';
return $output9;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['aria'] = NULL;
$arguments5['file'] = NULL;
$arguments5['mediaQueries'] = array (
  0 => 
  array (
    'default' => '',
  ),
);
$array7 = array (
);$arguments5['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array7);
// Rendering Array
$array8 = array();
$array8['card'] = '(max-width:1920px)';
$arguments5['mediaQueries'] = $array8;

$output4 .= C1\AdaptiveImages\ViewHelpers\RatioBoxViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_cardimage', $array3);
$arguments1['as'] = 'file';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' ';

return $output0;
}


}
#