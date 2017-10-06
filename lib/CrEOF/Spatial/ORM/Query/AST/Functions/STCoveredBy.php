<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STCoveredBy
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STCoveredBy extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_CoveredBy';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
