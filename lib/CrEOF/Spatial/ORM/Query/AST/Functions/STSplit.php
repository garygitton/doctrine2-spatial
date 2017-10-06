<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STSplit
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STSplit extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Split';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
