<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STX
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STX extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_X';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
