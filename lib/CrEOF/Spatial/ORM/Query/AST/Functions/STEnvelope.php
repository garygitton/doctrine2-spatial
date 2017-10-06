<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STEnvelope
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STEnvelope extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Envelope';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
