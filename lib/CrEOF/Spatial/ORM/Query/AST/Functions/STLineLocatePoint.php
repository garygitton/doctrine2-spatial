<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STLineLocatePoint
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STLineLocatePoint extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Line_Locate_Point';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
