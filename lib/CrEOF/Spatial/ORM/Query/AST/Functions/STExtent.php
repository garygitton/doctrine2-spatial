<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STExtent
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STExtent extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Extent';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
