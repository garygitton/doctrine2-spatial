<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STExpand
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STExpand extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Expand';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
