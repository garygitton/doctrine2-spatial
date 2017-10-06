<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STSimplify
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STSimplify extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Simplify';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
