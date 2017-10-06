<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STContainsProperly
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STContainsProperly extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_ContainsProperly';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
