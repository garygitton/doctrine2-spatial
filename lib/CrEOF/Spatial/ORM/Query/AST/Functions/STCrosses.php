<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STCrosses
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STCrosses extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Crosses';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
