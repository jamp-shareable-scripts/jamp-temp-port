<?php
/**
 * Returns a random port (in the dynamic or private port range 49152–65535).
 * https://wikipedia.org/wiki/List_of_TCP_and_UDP_port_numbers#Dynamic,_private_or_ephemeral_ports
 * 
 * Usage: jamp temp-port
 * 
 * @author  jamp-shareable-scripts <https://github.com/jamp-shareable-scripts>
 * @license GPL-2.0
 */

jampUse('jampEcho');

jampEcho(random_int(49152, 65535));
