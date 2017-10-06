<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STMakeLine
 *
 * this is a limited version of ST_MakeLine, supporting only 2 points.
 * ST_MakeLine also supports sets and arrays of geometry
 *
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STMakeLine extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_MakeLine';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
