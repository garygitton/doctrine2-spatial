<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STUnion
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STUnion extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Union';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 2;
}
