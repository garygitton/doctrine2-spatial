<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STMakePoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STMakePoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_MakePoint';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 3;
}
