<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STSummary
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STSummary extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Summary';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
