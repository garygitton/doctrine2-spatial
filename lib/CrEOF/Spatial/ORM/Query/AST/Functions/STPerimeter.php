<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STPerimeter
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STPerimeter extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Perimeter';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
