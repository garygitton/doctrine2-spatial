<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STIntersects
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STIntersects extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Intersects';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
