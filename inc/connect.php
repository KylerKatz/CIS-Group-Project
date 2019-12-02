<?php

header('Content-Type: application/json');
$connection = oci_connect($username = 'md5',
                            $password = 'matthew1002',
                            $connection_string = '//oracle.cise.ufl.edu/orcl');

?>