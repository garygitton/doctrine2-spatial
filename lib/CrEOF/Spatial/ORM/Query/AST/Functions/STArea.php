<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STArea
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STArea extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Area';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
