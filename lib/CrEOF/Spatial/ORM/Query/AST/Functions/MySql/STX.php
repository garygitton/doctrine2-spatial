<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * ST_X DQL function
 * Return X coordinate of Point
 *
 * @author  Gary Gitton <gary.gitton@gmail.com>
 */
class STX extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql'
    ];

    protected $functionName = 'ST_X';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
