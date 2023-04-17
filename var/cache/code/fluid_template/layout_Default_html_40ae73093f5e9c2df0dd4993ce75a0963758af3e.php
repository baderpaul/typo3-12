<?php

class layout_Default_html_40ae73093f5e9c2df0dd4993ce75a0963758af3e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output126 = '';

$output126 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
            <div id="c';
$array130 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array130)]);

$output129 .= '"
                 class="frame 
                        frame-type-';
$array131 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array131)]);

$output129 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array135);
$array134['1'] = ' == 1';

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['then'] = ' container-md';

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output129 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array140);
$array139['1'] = ' == 2';

$expression141 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['then'] = ' container-lg';

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output129 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array145);
$array144['1'] = ' == 3';

$expression146 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['then'] = ' container-fluid';

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output129 .= ' pt-20 pb-25 pt-md-40 pb-md-30">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    <a id="c';
$array153 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array153)]);

$output152 .= '"></a>
                ';
return $output152;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = $renderChildrenClosure148;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['section'] = NULL;
$arguments159['partial'] = NULL;
$arguments159['delegate'] = NULL;
$arguments159['renderable'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['optional'] = false;
$arguments159['default'] = NULL;
$arguments159['contentAs'] = NULL;
$arguments159['debug'] = true;
$arguments159['partial'] = 'DropIn/Before/All';
$arguments159['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                ';
return $output158;
};
$arguments154 = array();
$arguments154['section'] = NULL;
$arguments154['partial'] = NULL;
$arguments154['delegate'] = NULL;
$arguments154['renderable'] = NULL;
$arguments154['arguments'] = array (
);
$arguments154['optional'] = false;
$arguments154['default'] = NULL;
$arguments154['contentAs'] = NULL;
$arguments154['debug'] = true;
$arguments154['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array156['0'] = 'true';

$expression157 = function($context) {return TRUE;};
$arguments154['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['section'] = NULL;
$arguments167['partial'] = NULL;
$arguments167['delegate'] = NULL;
$arguments167['renderable'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['optional'] = false;
$arguments167['default'] = NULL;
$arguments167['contentAs'] = NULL;
$arguments167['debug'] = true;
$arguments167['partial'] = 'Header/All';
$arguments167['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
                ';
return $output166;
};
$arguments162 = array();
$arguments162['section'] = NULL;
$arguments162['partial'] = NULL;
$arguments162['delegate'] = NULL;
$arguments162['renderable'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['optional'] = false;
$arguments162['default'] = NULL;
$arguments162['contentAs'] = NULL;
$arguments162['debug'] = true;
$arguments162['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array164['0'] = 'true';

$expression165 = function($context) {return TRUE;};
$arguments162['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['section'] = NULL;
$arguments170['partial'] = NULL;
$arguments170['delegate'] = NULL;
$arguments170['renderable'] = NULL;
$arguments170['arguments'] = array (
);
$arguments170['optional'] = false;
$arguments170['default'] = NULL;
$arguments170['contentAs'] = NULL;
$arguments170['debug'] = true;
$arguments170['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array172['0'] = 'true';

$expression173 = function($context) {return TRUE;};
$arguments170['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['section'] = NULL;
$arguments179['partial'] = NULL;
$arguments179['delegate'] = NULL;
$arguments179['renderable'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['optional'] = false;
$arguments179['default'] = NULL;
$arguments179['contentAs'] = NULL;
$arguments179['debug'] = true;
$arguments179['partial'] = 'Footer/All';
$arguments179['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
                ';
return $output178;
};
$arguments174 = array();
$arguments174['section'] = NULL;
$arguments174['partial'] = NULL;
$arguments174['delegate'] = NULL;
$arguments174['renderable'] = NULL;
$arguments174['arguments'] = array (
);
$arguments174['optional'] = false;
$arguments174['default'] = NULL;
$arguments174['contentAs'] = NULL;
$arguments174['debug'] = true;
$arguments174['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array176['0'] = 'true';

$expression177 = function($context) {return TRUE;};
$arguments174['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['section'] = NULL;
$arguments187['partial'] = NULL;
$arguments187['delegate'] = NULL;
$arguments187['renderable'] = NULL;
$arguments187['arguments'] = array (
);
$arguments187['optional'] = false;
$arguments187['default'] = NULL;
$arguments187['contentAs'] = NULL;
$arguments187['debug'] = true;
$arguments187['partial'] = 'DropIn/After/All';
$arguments187['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
                ';
return $output186;
};
$arguments182 = array();
$arguments182['section'] = NULL;
$arguments182['partial'] = NULL;
$arguments182['delegate'] = NULL;
$arguments182['renderable'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['optional'] = false;
$arguments182['default'] = NULL;
$arguments182['contentAs'] = NULL;
$arguments182['debug'] = true;
$arguments182['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array184['0'] = 'true';

$expression185 = function($context) {return TRUE;};
$arguments182['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output129 .= '
            </div>
        ';
return $output129;
};
$arguments127 = array();

$output126 .= '';

$output126 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '

            <a id="c';
$array193 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array193)]);

$output192 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                <a id="c';
$array200 = array (
);
$output199 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array200)]);

$output199 .= '"></a>
            ';
return $output199;
};
$arguments194 = array();
$arguments194['then'] = NULL;
$arguments194['else'] = NULL;
$arguments194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array197);

$expression198 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
$arguments194['__thenClosure'] = $renderChildrenClosure195;

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                <div class="frame-space-before-';
$array207 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array207)]);

$output206 .= '"></div>
            ';
return $output206;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['section'] = NULL;
$arguments213['partial'] = NULL;
$arguments213['delegate'] = NULL;
$arguments213['renderable'] = NULL;
$arguments213['arguments'] = array (
);
$arguments213['optional'] = false;
$arguments213['default'] = NULL;
$arguments213['contentAs'] = NULL;
$arguments213['debug'] = true;
$arguments213['partial'] = 'DropIn/Before/All';
$arguments213['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
            ';
return $output212;
};
$arguments208 = array();
$arguments208['section'] = NULL;
$arguments208['partial'] = NULL;
$arguments208['delegate'] = NULL;
$arguments208['renderable'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['optional'] = false;
$arguments208['default'] = NULL;
$arguments208['contentAs'] = NULL;
$arguments208['debug'] = true;
$arguments208['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array210['0'] = 'true';

$expression211 = function($context) {return TRUE;};
$arguments208['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['section'] = NULL;
$arguments221['partial'] = NULL;
$arguments221['delegate'] = NULL;
$arguments221['renderable'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['optional'] = false;
$arguments221['default'] = NULL;
$arguments221['contentAs'] = NULL;
$arguments221['debug'] = true;
$arguments221['partial'] = 'Header/All';
$arguments221['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
            ';
return $output220;
};
$arguments216 = array();
$arguments216['section'] = NULL;
$arguments216['partial'] = NULL;
$arguments216['delegate'] = NULL;
$arguments216['renderable'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['optional'] = false;
$arguments216['default'] = NULL;
$arguments216['contentAs'] = NULL;
$arguments216['debug'] = true;
$arguments216['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array218['0'] = 'true';

$expression219 = function($context) {return TRUE;};
$arguments216['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['section'] = NULL;
$arguments224['partial'] = NULL;
$arguments224['delegate'] = NULL;
$arguments224['renderable'] = NULL;
$arguments224['arguments'] = array (
);
$arguments224['optional'] = false;
$arguments224['default'] = NULL;
$arguments224['contentAs'] = NULL;
$arguments224['debug'] = true;
$arguments224['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array226['0'] = 'true';

$expression227 = function($context) {return TRUE;};
$arguments224['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['section'] = NULL;
$arguments233['partial'] = NULL;
$arguments233['delegate'] = NULL;
$arguments233['renderable'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['optional'] = false;
$arguments233['default'] = NULL;
$arguments233['contentAs'] = NULL;
$arguments233['debug'] = true;
$arguments233['partial'] = 'Footer/All';
$arguments233['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
            ';
return $output232;
};
$arguments228 = array();
$arguments228['section'] = NULL;
$arguments228['partial'] = NULL;
$arguments228['delegate'] = NULL;
$arguments228['renderable'] = NULL;
$arguments228['arguments'] = array (
);
$arguments228['optional'] = false;
$arguments228['default'] = NULL;
$arguments228['contentAs'] = NULL;
$arguments228['debug'] = true;
$arguments228['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array230 = array();
$array230['0'] = 'true';

$expression231 = function($context) {return TRUE;};
$arguments228['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['section'] = NULL;
$arguments241['partial'] = NULL;
$arguments241['delegate'] = NULL;
$arguments241['renderable'] = NULL;
$arguments241['arguments'] = array (
);
$arguments241['optional'] = false;
$arguments241['default'] = NULL;
$arguments241['contentAs'] = NULL;
$arguments241['debug'] = true;
$arguments241['partial'] = 'DropIn/After/All';
$arguments241['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
            ';
return $output240;
};
$arguments236 = array();
$arguments236['section'] = NULL;
$arguments236['partial'] = NULL;
$arguments236['delegate'] = NULL;
$arguments236['renderable'] = NULL;
$arguments236['arguments'] = array (
);
$arguments236['optional'] = false;
$arguments236['default'] = NULL;
$arguments236['contentAs'] = NULL;
$arguments236['debug'] = true;
$arguments236['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array238 = array();
$array238['0'] = 'true';

$expression239 = function($context) {return TRUE;};
$arguments236['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output192 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                <div class="frame-space-after-';
$array250 = array (
);
$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array250)]);

$output249 .= '"></div>
            ';
return $output249;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array247);

$expression248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = $renderChildrenClosure245;

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output192 .= '

        ';
return $output192;
};
$arguments190 = array();
$arguments190['if'] = NULL;

$output126 .= '';

$output126 .= '
    ';
return $output126;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array124);
$array123['1'] = ' != none';

$expression125 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            <div id="c';
$array4 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array4)]);

$output3 .= '"
                 class="frame 
                        frame-type-';
$array5 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array5)]);

$output3 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array9);
$array8['1'] = ' == 1';

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['then'] = ' container-md';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array14);
$array13['1'] = ' == 2';

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['then'] = ' container-lg';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '
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
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array19);
$array18['1'] = ' == 3';

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['then'] = ' container-fluid';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output3 .= ' pt-20 pb-25 pt-md-40 pb-md-30">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                    <a id="c';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array27)]);

$output26 .= '"></a>
                ';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['partial'] = 'DropIn/Before/All';
$arguments33['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                ';
return $output32;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array30['0'] = 'true';

$expression31 = function($context) {return TRUE;};
$arguments28['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['renderable'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['debug'] = true;
$arguments41['partial'] = 'Header/All';
$arguments41['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                ';
return $output40;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array38['0'] = 'true';

$expression39 = function($context) {return TRUE;};
$arguments36['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['section'] = NULL;
$arguments44['partial'] = NULL;
$arguments44['delegate'] = NULL;
$arguments44['renderable'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['optional'] = false;
$arguments44['default'] = NULL;
$arguments44['contentAs'] = NULL;
$arguments44['debug'] = true;
$arguments44['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array46['0'] = 'true';

$expression47 = function($context) {return TRUE;};
$arguments44['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['renderable'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['debug'] = true;
$arguments53['partial'] = 'Footer/All';
$arguments53['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                ';
return $output52;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array50['0'] = 'true';

$expression51 = function($context) {return TRUE;};
$arguments48['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['section'] = NULL;
$arguments61['partial'] = NULL;
$arguments61['delegate'] = NULL;
$arguments61['renderable'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['optional'] = false;
$arguments61['default'] = NULL;
$arguments61['contentAs'] = NULL;
$arguments61['debug'] = true;
$arguments61['partial'] = 'DropIn/After/All';
$arguments61['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                ';
return $output60;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['debug'] = true;
$arguments56['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array58['0'] = 'true';

$expression59 = function($context) {return TRUE;};
$arguments56['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output3 .= '
            </div>
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '

            <a id="c';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array65)]);

$output64 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                <a id="c';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array72)]);

$output71 .= '"></a>
            ';
return $output71;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['__thenClosure'] = $renderChildrenClosure67;

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                <div class="frame-space-before-';
$array79 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array79)]);

$output78 .= '"></div>
            ';
return $output78;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['section'] = NULL;
$arguments85['partial'] = NULL;
$arguments85['delegate'] = NULL;
$arguments85['renderable'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['optional'] = false;
$arguments85['default'] = NULL;
$arguments85['contentAs'] = NULL;
$arguments85['debug'] = true;
$arguments85['partial'] = 'DropIn/Before/All';
$arguments85['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
            ';
return $output84;
};
$arguments80 = array();
$arguments80['section'] = NULL;
$arguments80['partial'] = NULL;
$arguments80['delegate'] = NULL;
$arguments80['renderable'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['optional'] = false;
$arguments80['default'] = NULL;
$arguments80['contentAs'] = NULL;
$arguments80['debug'] = true;
$arguments80['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array82['0'] = 'true';

$expression83 = function($context) {return TRUE;};
$arguments80['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['section'] = NULL;
$arguments93['partial'] = NULL;
$arguments93['delegate'] = NULL;
$arguments93['renderable'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['optional'] = false;
$arguments93['default'] = NULL;
$arguments93['contentAs'] = NULL;
$arguments93['debug'] = true;
$arguments93['partial'] = 'Header/All';
$arguments93['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
            ';
return $output92;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array90['0'] = 'true';

$expression91 = function($context) {return TRUE;};
$arguments88['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['renderable'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['debug'] = true;
$arguments96['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array98['0'] = 'true';

$expression99 = function($context) {return TRUE;};
$arguments96['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['section'] = NULL;
$arguments105['partial'] = NULL;
$arguments105['delegate'] = NULL;
$arguments105['renderable'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['optional'] = false;
$arguments105['default'] = NULL;
$arguments105['contentAs'] = NULL;
$arguments105['debug'] = true;
$arguments105['partial'] = 'Footer/All';
$arguments105['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
            ';
return $output104;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array102['0'] = 'true';

$expression103 = function($context) {return TRUE;};
$arguments100['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['section'] = NULL;
$arguments113['partial'] = NULL;
$arguments113['delegate'] = NULL;
$arguments113['renderable'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['optional'] = false;
$arguments113['default'] = NULL;
$arguments113['contentAs'] = NULL;
$arguments113['debug'] = true;
$arguments113['partial'] = 'DropIn/After/All';
$arguments113['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
            ';
return $output112;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['debug'] = true;
$arguments108['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array110['0'] = 'true';

$expression111 = function($context) {return TRUE;};
$arguments108['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output64 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                <div class="frame-space-after-';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array122)]);

$output121 .= '"></div>
            ';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output64 .= '

        ';
return $output64;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#