<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STEndPoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STEndPoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_EndPoint';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
