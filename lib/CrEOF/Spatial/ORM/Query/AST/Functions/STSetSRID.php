<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STSetSRID
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STSetSRID extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_SetSRID';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
