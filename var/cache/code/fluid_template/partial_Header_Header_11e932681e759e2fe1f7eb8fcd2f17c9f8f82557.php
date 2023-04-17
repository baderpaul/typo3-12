<?php

class partial_Header_Header_11e932681e759e2fe1f7eb8fcd2f17c9f8f82557 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
            <h1 class="';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array67)]);

$output66 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$array71 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array71)]);
};
$arguments68 = array();
$arguments68['parameter'] = NULL;
$arguments68['target'] = '';
$arguments68['class'] = '';
$arguments68['title'] = '';
$arguments68['language'] = NULL;
$arguments68['additionalParams'] = '';
$arguments68['additionalAttributes'] = array (
);
$arguments68['addQueryString'] = false;
$arguments68['addQueryStringExclude'] = '';
$arguments68['absolute'] = false;
$arguments68['parts-as'] = 'typoLinkParts';
$arguments68['textWrap'] = '';
$array70 = array (
);$arguments68['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array70);

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output66 .= '
            </h1>
        ';
return $output66;
};
$arguments64 = array();
$arguments64['value'] = NULL;
$arguments64['value'] = 1;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
            <h2 class="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array75)]);

$output74 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array79 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array79)]);
};
$arguments76 = array();
$arguments76['parameter'] = NULL;
$arguments76['target'] = '';
$arguments76['class'] = '';
$arguments76['title'] = '';
$arguments76['language'] = NULL;
$arguments76['additionalParams'] = '';
$arguments76['additionalAttributes'] = array (
);
$arguments76['addQueryString'] = false;
$arguments76['addQueryStringExclude'] = '';
$arguments76['absolute'] = false;
$arguments76['parts-as'] = 'typoLinkParts';
$arguments76['textWrap'] = '';
$array78 = array (
);$arguments76['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array78);

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output74 .= '
            </h2>
        ';
return $output74;
};
$arguments72 = array();
$arguments72['value'] = NULL;
$arguments72['value'] = 2;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
            <h3 class="';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array83)]);

$output82 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array87 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array87)]);
};
$arguments84 = array();
$arguments84['parameter'] = NULL;
$arguments84['target'] = '';
$arguments84['class'] = '';
$arguments84['title'] = '';
$arguments84['language'] = NULL;
$arguments84['additionalParams'] = '';
$arguments84['additionalAttributes'] = array (
);
$arguments84['addQueryString'] = false;
$arguments84['addQueryStringExclude'] = '';
$arguments84['absolute'] = false;
$arguments84['parts-as'] = 'typoLinkParts';
$arguments84['textWrap'] = '';
$array86 = array (
);$arguments84['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array86);

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output82 .= '
            </h3>
        ';
return $output82;
};
$arguments80 = array();
$arguments80['value'] = NULL;
$arguments80['value'] = 3;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
            <h4 class="';
$array91 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array91)]);

$output90 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array95 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array95)]);
};
$arguments92 = array();
$arguments92['parameter'] = NULL;
$arguments92['target'] = '';
$arguments92['class'] = '';
$arguments92['title'] = '';
$arguments92['language'] = NULL;
$arguments92['additionalParams'] = '';
$arguments92['additionalAttributes'] = array (
);
$arguments92['addQueryString'] = false;
$arguments92['addQueryStringExclude'] = '';
$arguments92['absolute'] = false;
$arguments92['parts-as'] = 'typoLinkParts';
$arguments92['textWrap'] = '';
$array94 = array (
);$arguments92['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array94);

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output90 .= '
            </h4>
        ';
return $output90;
};
$arguments88 = array();
$arguments88['value'] = NULL;
$arguments88['value'] = 4;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
            <h5 class="';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array99)]);

$output98 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array103 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array103)]);
};
$arguments100 = array();
$arguments100['parameter'] = NULL;
$arguments100['target'] = '';
$arguments100['class'] = '';
$arguments100['title'] = '';
$arguments100['language'] = NULL;
$arguments100['additionalParams'] = '';
$arguments100['additionalAttributes'] = array (
);
$arguments100['addQueryString'] = false;
$arguments100['addQueryStringExclude'] = '';
$arguments100['absolute'] = false;
$arguments100['parts-as'] = 'typoLinkParts';
$arguments100['textWrap'] = '';
$array102 = array (
);$arguments100['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array102);

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output98 .= '
            </h5>
        ';
return $output98;
};
$arguments96 = array();
$arguments96['value'] = NULL;
$arguments96['value'] = 5;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
            <h6 class="';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array107)]);

$output106 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array111 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array111)]);
};
$arguments108 = array();
$arguments108['parameter'] = NULL;
$arguments108['target'] = '';
$arguments108['class'] = '';
$arguments108['title'] = '';
$arguments108['language'] = NULL;
$arguments108['additionalParams'] = '';
$arguments108['additionalAttributes'] = array (
);
$arguments108['addQueryString'] = false;
$arguments108['addQueryStringExclude'] = '';
$arguments108['absolute'] = false;
$arguments108['parts-as'] = 'typoLinkParts';
$arguments108['textWrap'] = '';
$array110 = array (
);$arguments108['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array110);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output106 .= '
            </h6>
        ';
return $output106;
};
$arguments104 = array();
$arguments104['value'] = NULL;
$arguments104['value'] = 6;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments115 = array();

$output114 .= '';

$output114 .= '
        ';
return $output114;
};
$arguments112 = array();
$arguments112['value'] = NULL;
$arguments112['value'] = 100;

$output63 .= '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['renderable'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['debug'] = true;
$arguments126['partial'] = 'Header/Header';
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array129);
$array130 = array (
);$array128['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array130);
$array131 = array (
);$array128['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array131);
$array132 = array (
);$array128['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array132);
$arguments126['arguments'] = $array128;

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
            ';
return $output125;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
        ';
return $output119;
};
$arguments117 = array();

$output63 .= '';

$output63 .= '
    ';
return $output63;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array62 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('layout', $array62);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <h1 class="';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array10)]);

$output9 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array14 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array14)]);
};
$arguments11 = array();
$arguments11['parameter'] = NULL;
$arguments11['target'] = '';
$arguments11['class'] = '';
$arguments11['title'] = '';
$arguments11['language'] = NULL;
$arguments11['additionalParams'] = '';
$arguments11['additionalAttributes'] = array (
);
$arguments11['addQueryString'] = false;
$arguments11['addQueryStringExclude'] = '';
$arguments11['absolute'] = false;
$arguments11['parts-as'] = 'typoLinkParts';
$arguments11['textWrap'] = '';
$array13 = array (
);$arguments11['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array13);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output9 .= '
            </h1>
        ';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
            <h2 class="';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array16)]);

$output15 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array20 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array20)]);
};
$arguments17 = array();
$arguments17['parameter'] = NULL;
$arguments17['target'] = '';
$arguments17['class'] = '';
$arguments17['title'] = '';
$arguments17['language'] = NULL;
$arguments17['additionalParams'] = '';
$arguments17['additionalAttributes'] = array (
);
$arguments17['addQueryString'] = false;
$arguments17['addQueryStringExclude'] = '';
$arguments17['absolute'] = false;
$arguments17['parts-as'] = 'typoLinkParts';
$arguments17['textWrap'] = '';
$array19 = array (
);$arguments17['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array19);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output15 .= '
            </h2>
        ';
return $output15;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
            <h3 class="';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array22)]);

$output21 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array26 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array26)]);
};
$arguments23 = array();
$arguments23['parameter'] = NULL;
$arguments23['target'] = '';
$arguments23['class'] = '';
$arguments23['title'] = '';
$arguments23['language'] = NULL;
$arguments23['additionalParams'] = '';
$arguments23['additionalAttributes'] = array (
);
$arguments23['addQueryString'] = false;
$arguments23['addQueryStringExclude'] = '';
$arguments23['absolute'] = false;
$arguments23['parts-as'] = 'typoLinkParts';
$arguments23['textWrap'] = '';
$array25 = array (
);$arguments23['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array25);

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output21 .= '
            </h3>
        ';
return $output21;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
            <h4 class="';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array28)]);

$output27 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array32 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array32)]);
};
$arguments29 = array();
$arguments29['parameter'] = NULL;
$arguments29['target'] = '';
$arguments29['class'] = '';
$arguments29['title'] = '';
$arguments29['language'] = NULL;
$arguments29['additionalParams'] = '';
$arguments29['additionalAttributes'] = array (
);
$arguments29['addQueryString'] = false;
$arguments29['addQueryStringExclude'] = '';
$arguments29['absolute'] = false;
$arguments29['parts-as'] = 'typoLinkParts';
$arguments29['textWrap'] = '';
$array31 = array (
);$arguments29['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array31);

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output27 .= '
            </h4>
        ';
return $output27;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <h5 class="';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array34)]);

$output33 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array38 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array38)]);
};
$arguments35 = array();
$arguments35['parameter'] = NULL;
$arguments35['target'] = '';
$arguments35['class'] = '';
$arguments35['title'] = '';
$arguments35['language'] = NULL;
$arguments35['additionalParams'] = '';
$arguments35['additionalAttributes'] = array (
);
$arguments35['addQueryString'] = false;
$arguments35['addQueryStringExclude'] = '';
$arguments35['absolute'] = false;
$arguments35['parts-as'] = 'typoLinkParts';
$arguments35['textWrap'] = '';
$array37 = array (
);$arguments35['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array37);

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output33 .= '
            </h5>
        ';
return $output33;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
            <h6 class="';
$array40 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array40)]);

$output39 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array44 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array44)]);
};
$arguments41 = array();
$arguments41['parameter'] = NULL;
$arguments41['target'] = '';
$arguments41['class'] = '';
$arguments41['title'] = '';
$arguments41['language'] = NULL;
$arguments41['additionalParams'] = '';
$arguments41['additionalAttributes'] = array (
);
$arguments41['addQueryString'] = false;
$arguments41['addQueryStringExclude'] = '';
$arguments41['absolute'] = false;
$arguments41['parts-as'] = 'typoLinkParts';
$arguments41['textWrap'] = '';
$array43 = array (
);$arguments41['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array43);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output39 .= '
            </h6>
        ';
return $output39;
});
case call_user_func(function() use ($renderingContext, $self) {

return 100;
}): return call_user_func(function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments46 = array();

$output45 .= '';

$output45 .= '
        ';
return $output45;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['section'] = NULL;
$arguments55['partial'] = NULL;
$arguments55['delegate'] = NULL;
$arguments55['renderable'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['optional'] = false;
$arguments55['default'] = NULL;
$arguments55['contentAs'] = NULL;
$arguments55['debug'] = true;
$arguments55['partial'] = 'Header/Header';
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array58);
$array59 = array (
);$array57['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array59);
$array60 = array (
);$array57['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array60);
$array61 = array (
);$array57['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array61);
$arguments55['arguments'] = $array57;

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
            ';
return $output54;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
        ';
return $output48;
});
}
}, array($arguments7));

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('header', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#