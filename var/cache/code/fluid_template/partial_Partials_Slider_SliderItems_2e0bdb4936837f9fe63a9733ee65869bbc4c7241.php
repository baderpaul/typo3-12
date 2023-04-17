<?php

class partial_Partials_Slider_SliderItems_2e0bdb4936837f9fe63a9733ee65869bbc4c7241 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <div class="carousel-item ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('indicator-2.isFirst', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['then'] = ' active';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            ';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\RatioBoxViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                <picture class="loader img-filter">
                      <source media="(max-width: 767px)"
                              data-srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['file'] = NULL;
$arguments19['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments19['cropVariant'] = 'default';
$arguments19['debug'] = false;
$arguments19['absolute'] = false;
$array21 = array (
);$arguments19['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array21);
$arguments19['cropVariant'] = 'slidermobile';
$arguments19['widths'] = '360,480,580,660,768';
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);

$output18 .= C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '"
                              srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['file'] = NULL;
$arguments25['cropVariant'] = 'default';
$arguments25['content'] = '';
$arguments25['embedPreview'] = false;
$arguments25['embedPreviewWidth'] = 64;
$arguments25['embedPreviewAdditionalParameters'] = '-quality 50 -sampling-factor 4:2:0 -strip -posterize 136 -colorspace sRGB -unsharp 0.25x0.25+8+0.065 -despeckle -noise 5';
$array27 = array (
);$arguments25['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array27);
$arguments25['cropVariant'] = 'slidermobile';

$output18 .= C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output18 .= ' 1w"
                              sizes=\'';
$array28 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizesAttr', $array28)]);

$output18 .= '\'
                              data-sizes="auto"
                      >
                      <source media="(min-width: 768px)"
                      data-srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['file'] = NULL;
$arguments29['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments29['cropVariant'] = 'default';
$arguments29['debug'] = false;
$arguments29['absolute'] = false;
$array31 = array (
);$arguments29['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array31);
$arguments29['cropVariant'] = 'sliderdesktop';
$arguments29['widths'] = '800,1024,1280,1440,1600,1700,1920';
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);

$output18 .= C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output18 .= '"
                      srcset="';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['file'] = NULL;
$arguments35['cropVariant'] = 'default';
$arguments35['content'] = '';
$arguments35['embedPreview'] = false;
$arguments35['embedPreviewWidth'] = 64;
$arguments35['embedPreviewAdditionalParameters'] = '-quality 50 -sampling-factor 4:2:0 -strip -posterize 136 -colorspace sRGB -unsharp 0.25x0.25+8+0.065 -despeckle -noise 5';
$array37 = array (
);$arguments35['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array37);
$arguments35['cropVariant'] = 'sliderdesktop';

$output18 .= C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output18 .= ' 1w"
                      sizes=\'';
$array38 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizesAttr', $array38)]);

$output18 .= '\'
                      data-sizes="auto"
                      >
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['aria'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['alt'] = NULL;
$arguments39['file'] = NULL;
$arguments39['additionalConfig'] = array (
);
$arguments39['width'] = NULL;
$arguments39['height'] = NULL;
$arguments39['cropVariant'] = 'default';
$arguments39['fileExtension'] = NULL;
$arguments39['loading'] = NULL;
$arguments39['decoding'] = NULL;
$array41 = array (
);$arguments39['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array41);
$arguments39['class'] = 'image-embed-item lazyload img-responsive';
$array42 = array (
);$arguments39['width'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array42);
$array43 = array (
);$arguments39['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array43);
$array44 = array (
);$arguments39['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array44);
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['img-debug'] = $renderingContext->getVariableProvider()->getByPath('jsdebug', $array46);
$array45['sizes'] = 'auto';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['file'] = NULL;
$arguments47['widths'] = array (
  0 => 320,
  1 => 640,
  2 => 1024,
  3 => 1440,
  4 => 1920,
);
$arguments47['cropVariant'] = 'default';
$arguments47['debug'] = false;
$arguments47['absolute'] = false;
$array49 = array (
);$arguments47['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array49);
$arguments47['widths'] = 360;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('debug', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$array45['srcset'] = C1\AdaptiveImages\ViewHelpers\GetSrcsetViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
$arguments39['data'] = $array45;
// Rendering Array
$array53 = array();
$array53['sizes'] = '100vw';
$output54 = '';
// Rendering ViewHelper C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['file'] = NULL;
$arguments55['cropVariant'] = 'default';
$arguments55['content'] = '';
$arguments55['embedPreview'] = false;
$arguments55['embedPreviewWidth'] = 64;
$arguments55['embedPreviewAdditionalParameters'] = '-quality 50 -sampling-factor 4:2:0 -strip -posterize 136 -colorspace sRGB -unsharp 0.25x0.25+8+0.065 -despeckle -noise 5';
$array57 = array (
);$arguments55['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array57);

$output54 .= C1\AdaptiveImages\ViewHelpers\Placeholder\SvgViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= ' 1w';
$array53['srcset'] = $output54;
$arguments39['additionalAttributes'] = $array53;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output18 .= '
                  </picture>
                ';
return $output18;
};
$arguments14 = array();
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['aria'] = NULL;
$arguments14['file'] = NULL;
$arguments14['mediaQueries'] = array (
  0 => 
  array (
    'default' => '',
  ),
);
$array16 = array (
);$arguments14['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array16);
// Rendering Array
$array17 = array();
$array17['slidermobile'] = '(max-width:767px)';
$array17['sliderdesktop'] = '(min-width:768px)';
$arguments14['mediaQueries'] = $array17;

$output13 .= C1\AdaptiveImages\ViewHelpers\RatioBoxViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= ' 
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

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output4 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['renderable'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['debug'] = true;
$arguments66['partial'] = 'Partials/Slider/SliderSlogan';
$arguments66['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
';
return $output65;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_slogan_big', $array61);
$array60['1'] = ' || ';
$array62 = array (
);$array60['2'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_slogan_small', $array62);
$array60['3'] = ' || ';
$array63 = array (
);$array60['4'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_slogan_cta', $array63);

$expression64 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['renderable'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['debug'] = true;
$arguments75['partial'] = 'Partials/Slider/SliderItemDescrption';
$arguments75['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
        ';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_imagedescription', $array72);

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output4 .= '
    </div>
    
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
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_slideimages', $array3);
$arguments1['as'] = 'data_item';
$arguments1['iteration'] = 'indicator-2';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return '
.fadeIn{animation-name: fadeIn;animation-duration: 2s;animation-timing-function: ease-in-out;}.fadeInUp {animation-name: fadeInUp;animation-duration: 1s;animation-timing-function: ease-in-out;}.fadeInDown {animation-name: fadeInDown;animation-duration: 1s;animation-timing-function: ease-in-out;}.text-shadow-hero {text-shadow: 2px 1px 2px #adb5bd;}';
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['aria'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['as'] = NULL;
$arguments78['crossorigin'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['href'] = NULL;
$arguments78['hreflang'] = NULL;
$arguments78['importance'] = NULL;
$arguments78['integrity'] = NULL;
$arguments78['media'] = NULL;
$arguments78['referrerpolicy'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['sizes'] = NULL;
$arguments78['type'] = NULL;
$arguments78['nonce'] = NULL;
$arguments78['identifier'] = NULL;
$arguments78['priority'] = false;
$arguments78['identifier'] = 'slider';
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array80['0'] = 'true';

$expression81 = function($context) {return TRUE;};
$arguments78['priority'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

return $output0;
}


}
#