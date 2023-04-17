<?php

class partial_Partials_Slider_SliderIndicator_41949617392d6e2e859ae02667bf16bf7a6baf88 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<ol class="carousel-indicators
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_indicatorthumbnail', $array4);
$array3['1'] = '==1';

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = ' position-relative';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' p-0 m-0 d-none d-lg-flex">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            <li data-bs-target="#carouselExampleIndicators-';
$array14 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array14)]);

$output13 .= '"  data-bs-slide-to="';
$array15 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('indicator.index', $array15)]);

$output13 .= '"
                class="d-inline-block
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('indicator.isFirst', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['then'] = 'active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_indicatorthumbnail', $array24);
$array23['1'] = '==1';

$expression25 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['then'] = ' slider-thumb-width';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output13 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                        <picture class="loader ">
                            <source media="(max-width: 767px)"
                              data-srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['file'] = NULL;
$arguments32['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments32['cropVariant'] = 'default';
$arguments32['debug'] = false;
$arguments32['absolute'] = false;
$array34 = array (
);$arguments32['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array34);
$arguments32['cropVariant'] = 'mobile';
$arguments32['widths'] = '50,60,70';
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);

$output31 .= C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '"
                              srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['file'] = NULL;
$arguments38['cropVariant'] = 'default';
$arguments38['content'] = '';
$arguments38['embedPreview'] = false;
$arguments38['embedPreviewWidth'] = 64;
$arguments38['embedPreviewAdditionalParameters'] = '-quality 50 -sampling-factor 4:2:0 -strip -posterize 136 -colorspace sRGB -unsharp 0.25x0.25+8+0.065 -despeckle -noise 5';
$array40 = array (
);$arguments38['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array40);
$arguments38['cropVariant'] = 'mobile';

$output31 .= C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output31 .= ' 1w"
                              sizes=\'';
$array41 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizesAttr', $array41)]);

$output31 .= '\'
                              data-sizes="auto"
                      >
                              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['aria'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['alt'] = NULL;
$arguments42['file'] = NULL;
$arguments42['additionalConfig'] = array (
);
$arguments42['width'] = NULL;
$arguments42['height'] = NULL;
$arguments42['cropVariant'] = 'default';
$arguments42['fileExtension'] = NULL;
$arguments42['loading'] = NULL;
$arguments42['decoding'] = NULL;
$array44 = array (
);$arguments42['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array44);
$arguments42['class'] = 'image-embed-item lazyload img-responsive';
$array45 = array (
);$arguments42['width'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array45);
$array46 = array (
);$arguments42['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array46);
$array47 = array (
);$arguments42['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array47);
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['img-debug'] = $renderingContext->getVariableProvider()->getByPath('jsdebug', $array49);
$arguments42['data'] = $array48;
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['sizes'] = $renderingContext->getVariableProvider()->getByPath('sizesAttr', $array51);
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['file'] = NULL;
$arguments52['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments52['cropVariant'] = 'default';
$arguments52['debug'] = false;
$arguments52['absolute'] = false;
$array54 = array (
);$arguments52['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array54);
$arguments52['widths'] = '50,60,70,100, 110';
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array56);

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$array50['srcset'] = C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
$arguments42['additionalAttributes'] = $array50;

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output31 .= '
                          </picture>                  
                ';
return $output31;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_indicatorthumbnail', $array29);
$array28['1'] = '==1';

$expression30 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '
            </li>
        ';
return $output13;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$array12 = array (
);$arguments10['each'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_slideitem', $array12);
$arguments10['as'] = 'file';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
    ';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_slideimages', $array8);
$arguments6['as'] = 'data_item';
$arguments6['iteration'] = 'indicator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
</ol>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return '
    .slider-thumb-width {
        max-width: 3.125rem;
        height: auto !important;   
    }
    @media (min-width: 992px) {
    .slider-thumb-width {
        max-width: 12.5rem;
    }
}
';
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['aria'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['as'] = NULL;
$arguments64['crossorigin'] = NULL;
$arguments64['disabled'] = NULL;
$arguments64['href'] = NULL;
$arguments64['hreflang'] = NULL;
$arguments64['importance'] = NULL;
$arguments64['integrity'] = NULL;
$arguments64['media'] = NULL;
$arguments64['referrerpolicy'] = NULL;
$arguments64['rel'] = NULL;
$arguments64['sizes'] = NULL;
$arguments64['type'] = NULL;
$arguments64['nonce'] = NULL;
$arguments64['identifier'] = NULL;
$arguments64['priority'] = false;
$output66 = '';

$output66 .= 'id-css-btslider-c';
$array67 = array (
);
$output66 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array67);
$arguments64['identifier'] = $output66;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array68['0'] = 'true';

$expression69 = function($context) {return TRUE;};
$arguments64['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
';
return $output63;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_indicatorthumbnail', $array61);
$array60['1'] = '==1';

$expression62 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

return $output0;
}


}
#