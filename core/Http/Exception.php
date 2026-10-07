<?php
declare(strict_types=1);

namespace Core\Http;

class Exception extends \Exception
{
    /**
     * @var integer
     */
    const NOT_FOUND = 404;
    
    /**
     * @var integer
     */
    const INTERNAL_SERVER_ERROR = 500;
}