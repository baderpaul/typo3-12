<?php

class Default_action_ToolbarItems_ShortcutToolbarItemDropDown_ee216843407b91f1f75135da5e4b9c087f27028d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h3 class="dropdown-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarks';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h3>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return 'No shortcuts added yet, show a small help message how to add shortcuts';
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
            <p class="dropdown-item-text">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_description';
// Rendering Array
$array91 = array();
$output92 = '';

$output92 .= '<span title="';
$array93 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('inlineIconTitle', $array93);

$output92 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('inlineIcon', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output92 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output92 .= '</span>';
$array91['0'] = $output92;
$arguments89['arguments'] = $array91;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
};
$arguments87 = array();
$arguments87['value'] = NULL;

$output86 .= isset($arguments87['value']) ? $arguments87['value'] : $renderChildrenClosure88();

$output86 .= '</p>
        ';
return $output86;
};
$arguments79 = array();
$arguments79['map'] = NULL;
// Rendering Array
$array81 = array();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['identifier'] = NULL;
$arguments82['size'] = 'small';
$arguments82['overlay'] = NULL;
$arguments82['state'] = 'default';
$arguments82['alternativeMarkupIdentifier'] = NULL;
$arguments82['identifier'] = 'actions-share-alt';
$arguments82['alternativeMarkupIdentifier'] = 'inline';
$array81['inlineIcon'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarks';
$array81['inlineIconTitle'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
$arguments79['map'] = $array81;

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output76 .= '
    ';
return $output76;
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return '
                <hr class="dropdown-divider" aria-hidden="true">
            ';
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array106['0'] = '!';
$array107 = array (
);$array106['1'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array107);

$expression108 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = $renderChildrenClosure105;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                <h3 class="dropdown-headline" id="shortcut-group-';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id', $array115)]);

$output114 .= '">';
$array116 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.title', $array116)]);

$output114 .= '</h3>
            ';
return $output114;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('group.title', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output103 .= '
            <ul class="dropdown-list" data-shortcutgroup="';
$array117 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id', $array117)]);

$output103 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                    <li class="t3js-topbar-shortcut" data-shortcutid="';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.raw.uid', $array122)]);

$output121 .= '" data-shortcutgroup="';
$array123 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id', $array123)]);

$output121 .= '">
                        <a href="';
$array124 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.href', $array124)]);

$output121 .= '" class="dropdown-item dropdown-item-title t3js-shortcut-jump"
                            title="';
$array125 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label', $array125)]);

$output121 .= '"
                            data-module="';
$array126 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.module', $array126)]);

$output121 .= '"
                            data-route="';
$array127 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.route', $array127)]);

$output121 .= '"
                            data-pageid="';
$array128 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.pageId', $array128)]);

$output121 .= '"
                        >
                            <span class="dropdown-item-columns">
                                <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array131 = array (
);return $renderingContext->getVariableProvider()->getByPath('shortcut.icon', $array131);
};
$arguments129 = array();
$arguments129['value'] = NULL;

$output121 .= isset($arguments129['value']) ? $arguments129['value'] : $renderChildrenClosure130();

$output121 .= '
                                </span>
                                <span class="dropdown-item-column dropdown-item-column-title">
                                    ';
$array132 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label', $array132)]);

$output121 .= '
                                </span>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-action t3js-shortcut-edit"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarksEdit';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output121 .= '"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['identifier'] = NULL;
$arguments135['size'] = 'small';
$arguments135['overlay'] = NULL;
$arguments135['state'] = 'default';
$arguments135['alternativeMarkupIdentifier'] = NULL;
$arguments135['identifier'] = 'actions-open';
$arguments135['alternativeMarkupIdentifier'] = 'inline';

$output121 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output121 .= '
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-action t3js-shortcut-delete"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarksDelete';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output121 .= '"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['identifier'] = NULL;
$arguments139['size'] = 'small';
$arguments139['overlay'] = NULL;
$arguments139['state'] = 'default';
$arguments139['alternativeMarkupIdentifier'] = NULL;
$arguments139['identifier'] = 'actions-delete';
$arguments139['alternativeMarkupIdentifier'] = 'inline';

$output121 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output121 .= '
                        </a>
                    </li>
                ';
return $output121;
};
$arguments118 = array();
$arguments118['each'] = NULL;
$arguments118['as'] = NULL;
$arguments118['key'] = NULL;
$arguments118['reverse'] = false;
$arguments118['iteration'] = NULL;
$array120 = array (
);$arguments118['each'] = $renderingContext->getVariableProvider()->getByPath('group.shortcuts', $array120);
$arguments118['as'] = 'shortcut';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output103 .= '
            </ul>
        ';
return $output103;
};
$arguments100 = array();
$arguments100['each'] = NULL;
$arguments100['as'] = NULL;
$arguments100['key'] = NULL;
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$array102 = array (
);$arguments100['each'] = $renderingContext->getVariableProvider()->getByPath('shortcutMenu', $array102);
$arguments100['as'] = 'group';
$arguments100['iteration'] = 'iterator';

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
    ';
return $output99;
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output73 .= '';

$output73 .= '
';
return $output73;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['subject'] = NULL;
$array71 = array (
);$arguments69['subject'] = $renderingContext->getVariableProvider()->getByPath('shortcutMenu', $array71);
$renderChildrenClosure70 = ($arguments69['subject'] !== null) ? function() use ($arguments69) { return $arguments69['subject']; } : $renderChildrenClosure70;$array68['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
$array68['1'] = ' == 0';

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return 'No shortcuts added yet, show a small help message how to add shortcuts';
};
$arguments6 = array();

$output5 .= '';

$output5 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
            <p class="dropdown-item-text">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_description';
// Rendering Array
$array20 = array();
$output21 = '';

$output21 .= '<span title="';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('inlineIconTitle', $array22);

$output21 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('inlineIcon', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output21 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output21 .= '</span>';
$array20['0'] = $output21;
$arguments18['arguments'] = $array20;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output15 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output15 .= '</p>
        ';
return $output15;
};
$arguments8 = array();
$arguments8['map'] = NULL;
// Rendering Array
$array10 = array();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['identifier'] = NULL;
$arguments11['size'] = 'small';
$arguments11['overlay'] = NULL;
$arguments11['state'] = 'default';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$arguments11['identifier'] = 'actions-share-alt';
$arguments11['alternativeMarkupIdentifier'] = 'inline';
$array10['inlineIcon'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarks';
$array10['inlineIconTitle'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$arguments8['map'] = $array10;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output5 .= '
    ';
return $output5;
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return '
                <hr class="dropdown-divider" aria-hidden="true">
            ';
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array33['0'] = '!';
$array34 = array (
);$array33['1'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array34);

$expression35 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                <h3 class="dropdown-headline" id="shortcut-group-';
$array42 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id', $array42)]);

$output41 .= '">';
$array43 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.title', $array43)]);

$output41 .= '</h3>
            ';
return $output41;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('group.title', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = $renderChildrenClosure37;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output30 .= '
            <ul class="dropdown-list" data-shortcutgroup="';
$array44 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id', $array44)]);

$output30 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                    <li class="t3js-topbar-shortcut" data-shortcutid="';
$array49 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.raw.uid', $array49)]);

$output48 .= '" data-shortcutgroup="';
$array50 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id', $array50)]);

$output48 .= '">
                        <a href="';
$array51 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.href', $array51)]);

$output48 .= '" class="dropdown-item dropdown-item-title t3js-shortcut-jump"
                            title="';
$array52 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label', $array52)]);

$output48 .= '"
                            data-module="';
$array53 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.module', $array53)]);

$output48 .= '"
                            data-route="';
$array54 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.route', $array54)]);

$output48 .= '"
                            data-pageid="';
$array55 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.pageId', $array55)]);

$output48 .= '"
                        >
                            <span class="dropdown-item-columns">
                                <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('shortcut.icon', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;

$output48 .= isset($arguments56['value']) ? $arguments56['value'] : $renderChildrenClosure57();

$output48 .= '
                                </span>
                                <span class="dropdown-item-column dropdown-item-column-title">
                                    ';
$array59 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label', $array59)]);

$output48 .= '
                                </span>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-action t3js-shortcut-edit"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarksEdit';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output48 .= '"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['identifier'] = NULL;
$arguments62['size'] = 'small';
$arguments62['overlay'] = NULL;
$arguments62['state'] = 'default';
$arguments62['alternativeMarkupIdentifier'] = NULL;
$arguments62['identifier'] = 'actions-open';
$arguments62['alternativeMarkupIdentifier'] = 'inline';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output48 .= '
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-action t3js-shortcut-delete"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarksDelete';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output48 .= '"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['identifier'] = NULL;
$arguments66['size'] = 'small';
$arguments66['overlay'] = NULL;
$arguments66['state'] = 'default';
$arguments66['alternativeMarkupIdentifier'] = NULL;
$arguments66['identifier'] = 'actions-delete';
$arguments66['alternativeMarkupIdentifier'] = 'inline';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output48 .= '
                        </a>
                    </li>
                ';
return $output48;
};
$arguments45 = array();
$arguments45['each'] = NULL;
$arguments45['as'] = NULL;
$arguments45['key'] = NULL;
$arguments45['reverse'] = false;
$arguments45['iteration'] = NULL;
$array47 = array (
);$arguments45['each'] = $renderingContext->getVariableProvider()->getByPath('group.shortcuts', $array47);
$arguments45['as'] = 'shortcut';

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output30 .= '
            </ul>
        ';
return $output30;
};
$arguments27 = array();
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$array29 = array (
);$arguments27['each'] = $renderingContext->getVariableProvider()->getByPath('shortcutMenu', $array29);
$arguments27['as'] = 'group';
$arguments27['iteration'] = 'iterator';

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
    ';
return $output26;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#