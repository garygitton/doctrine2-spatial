<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STIntersection
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STIntersection extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Intersection';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
