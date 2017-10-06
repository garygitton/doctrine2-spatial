<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STClosestPoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STClosestPoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_ClosestPoint';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
