<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STGeometryN
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STGeometryN extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_GeometryN';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
