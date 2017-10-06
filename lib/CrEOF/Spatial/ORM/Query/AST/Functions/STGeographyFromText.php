<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STGeographyFromText
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STGeographyFromText extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_GeographyFromText';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 2;
}
