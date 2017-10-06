<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STCovers
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STCovers extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Covers';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
