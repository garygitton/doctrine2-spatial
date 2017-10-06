<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STWithin
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STWithin extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Within';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
