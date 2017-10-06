<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STBoundary
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STBoundary extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Boundary';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
