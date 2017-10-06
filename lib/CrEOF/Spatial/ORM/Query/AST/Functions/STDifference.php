<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STDifference
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STDifference extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Difference';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
