<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STStartPoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STStartPoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_StartPoint';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
