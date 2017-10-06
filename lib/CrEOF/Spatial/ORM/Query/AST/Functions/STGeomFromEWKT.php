<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STGeomFromEWKT
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STGeomFromEWKT extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_GeomFromEWKT';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 2;
}
