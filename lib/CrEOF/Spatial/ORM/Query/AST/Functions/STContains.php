<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STContains
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STContains extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Contains';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
