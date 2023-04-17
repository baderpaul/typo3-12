<?php

class partial_Footer_FooterInfo_8ca1f5e1eef397d2d5b2bc7c9967a28611a77ae3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= ' <div class="container-md p-0 footer-info">
    <div class="row g-0 px-10 text-secondary">
        <div class="col-6 col-lg-4">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('colPos10', $array24);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output21 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output21 .= '
        </div>
        <div class="col-6 col-lg-4 text-end text-md-center">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('colPos11', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output21 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output21 .= '
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-center align-items-md-end justify-content-center justify-content-md-end">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('colPos12', $array30);
};
$arguments28 = array();
$arguments28['value'] = NULL;

$output21 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output21 .= '
        </div>
      </div>
</div>';
return $output21;
};
$arguments19 = array();

$output18 .= '';

$output18 .= '
';
return $output18;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('data.backend_layout', $array15);
$array13['0'] = $array14;
$array13['1'] = '!=';
// Rendering Array
$array16 = array();
$array16['0'] = 'pagets__default_onepage';
$array13['2'] = $array16;

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= ' <div class="container-md p-0 footer-info">
    <div class="row g-0 px-10 text-secondary">
        <div class="col-6 col-lg-4">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('colPos10', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output3 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output3 .= '
        </div>
        <div class="col-6 col-lg-4 text-end text-md-center">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('colPos11', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output3 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output3 .= '
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-center align-items-md-end justify-content-center justify-content-md-end">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('colPos12', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output3 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output3 .= '
        </div>
      </div>
</div>';
return $output3;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

return $output0;
}


}
#