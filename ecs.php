<?php

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->services()->set(\PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class);
    $ecsConfig->services()->set(\Symplify\CodingStandard\Fixer\Spacing\MethodChainingNewlineFixer::class);
};
