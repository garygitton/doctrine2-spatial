<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STLineCrossingDirection
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STLineCrossingDirection extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_LineCrossingDirection';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
