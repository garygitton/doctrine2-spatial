<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STY
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STY extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Y';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
