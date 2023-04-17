<?php

class partial_Media_Type_fc92eba56913e2c3cfafdf0b95aa35800dbdc8d0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['debug'] = true;
$arguments32['partial'] = 'Media/Type/Audio';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array35);
$array36 = array (
);$array34['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array36);
$array37 = array (
);$array34['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array37);
$array38 = array (
);$array34['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array38);
$arguments32['arguments'] = $array34;

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
    ';
return $output31;
};
$arguments29 = array();
$arguments29['value'] = NULL;
$arguments29['value'] = 3;

$output28 .= '';

$output28 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Media/Type/Video';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array45);
$array46 = array (
);$array44['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array46);
$array47 = array (
);$array44['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array47);
$array48 = array (
);$array44['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array48);
$arguments42['arguments'] = $array44;

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
    ';
return $output41;
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['value'] = 4;

$output28 .= '';

$output28 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Media/Type/Image';
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array55);
$array56 = array (
);$array54['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array56);
$array57 = array (
);$array54['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array57);
$array58 = array (
);$array54['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array58);
$arguments52['arguments'] = $array54;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
    ';
return $output51;
};
$arguments49 = array();

$output28 .= '';

$output28 .= '
';
return $output28;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array27 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('file.type', $array27);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Media/Type/Audio';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array7);
$array8 = array (
);$array6['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array8);
$array9 = array (
);$array6['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array9);
$array10 = array (
);$array6['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array10);
$arguments4['arguments'] = $array6;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['debug'] = true;
$arguments12['partial'] = 'Media/Type/Video';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array15);
$array16 = array (
);$array14['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array16);
$array17 = array (
);$array14['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array17);
$array18 = array (
);$array14['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array18);
$arguments12['arguments'] = $array14;

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
    ';
return $output11;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Media/Type/Image';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array23);
$array24 = array (
);$array22['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array24);
$array25 = array (
);$array22['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array25);
$array26 = array (
);$array22['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array26);
$arguments20['arguments'] = $array22;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
    ';
return $output19;
});
}
}, array($arguments1));

$output0 .= '
';

return $output0;
}


}
#