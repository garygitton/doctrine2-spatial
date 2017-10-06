<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STDistance
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STDistance extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Distance';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 3;
}
