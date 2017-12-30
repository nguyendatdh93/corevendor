<?php

namespace Atb\Corevendor\Helpers\Console\Commands;

use Illuminate\Foundation\Console\RequestMakeCommand as BaseRequestMakeCommand;

/**
 * Class RequestMakeCommand.
 *
 * @package App\Console\Commands
 */
class RequestMakeCommand extends BaseRequestMakeCommand
{
    use PackableGeneratorCommand;
}
