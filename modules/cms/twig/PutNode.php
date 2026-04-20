<?php namespace Cms\Twig;

use Twig\Node\Node as TwigNode;
use Twig\Compiler as TwigCompiler;

/**
 * PutNode represents a "put" node
 *
 * @package october\cms
 * @author Alexey Bobkov, Samuel Georges
 */
class PutNode extends TwigNode
{
    /**
     * __construct
     */
    public function __construct(bool $capture, TwigNode $names, TwigNode $values, $options, $lineno, $tag = 'put')
    {
        parent::__construct(['names' => $names, 'values' => $values], ['capture' => $capture, 'options' => $options], $lineno, $tag);
    }

    /**
     * compile the node to PHP.
     */
    public function compile(TwigCompiler $compiler)
    {
        $names = $this->getNode('names');
        $values = $this->getNode('values');
        $isCapture = $this->getAttribute('capture');
        if ($isCapture) {
            $options = (array) $this->getAttribute('options');
            // @deprecated using overwrite is deprecated
            $isReplace = in_array('replace', $options) || in_array('overwrite', $options);
            $isOnce = in_array('once', $options);

            $blockName = $names->getNode(0);
            $compiler->addDebugInfo($this);

            if ($isOnce) {
                $compiler
                    ->write("\$this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlockOnce(")
                    ->string($this->getTemplateName())
                    ->write(", ");
                ;
            }
            else {
                $compiler->write("\$this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock(");
            }

            $compiler
                ->string($blockName->getAttribute('name'))
                ->write(", function() use (\$context, \$blocks, \$macros) {\n")
            ;

            $compiler->subcompile($this->getNode('values'));

            $compiler
                ->addDebugInfo($this)
                ->write("return; yield '';}, ")
                ->raw($isReplace ? 'false' : 'true')
                ->write(");\n")
            ;
        }
        else {
            foreach ($names as $key => $name) {
                if (!$values->hasNode($key)) {
                    continue;
                }

                $value = $values->getNode($key);

                $compiler
                    ->addDebugInfo($this)
                    ->write("\$this->env->getExtension(\Cms\Twig\Extension::class)->setBlock(")
                    ->raw("'".$name->getAttribute('name')."'")
                    ->raw(', ')
                    ->subcompile($value)
                    ->write(");\n")
                ;
            }
        }
    }
}
