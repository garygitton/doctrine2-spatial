<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STOverlaps
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STOverlaps extends AbstractSpatialDQLFunction {

    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Overlaps';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
