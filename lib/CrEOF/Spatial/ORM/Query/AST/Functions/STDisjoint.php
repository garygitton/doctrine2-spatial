<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STDisjoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STDisjoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Disjoint';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
