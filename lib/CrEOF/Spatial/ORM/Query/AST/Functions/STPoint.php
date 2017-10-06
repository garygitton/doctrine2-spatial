<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STPoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STPoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Point';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
