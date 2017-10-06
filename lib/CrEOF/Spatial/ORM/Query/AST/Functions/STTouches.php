<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STTouches
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STTouches extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Touches';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
