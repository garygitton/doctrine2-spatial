<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STDWithin
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STDWithin extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_DWithin';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 3;
}
