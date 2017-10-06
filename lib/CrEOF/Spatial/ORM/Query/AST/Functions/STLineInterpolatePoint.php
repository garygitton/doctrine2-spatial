<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STLineInterpolatePoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STLineInterpolatePoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Line_Interpolate_Point';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
