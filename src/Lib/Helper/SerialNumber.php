<?php

namespace abnDevs\Zkteco\Lib\Helper;

use abnDevs\Zkteco\Lib\ZKTeco;

class SerialNumber
{
    /**
     * @param ZKTeco $self
     * @return bool|mixed
     */
    static public function get(ZKTeco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SerialNumber';

        return $self->_command($command, $command_string);
    }
}
