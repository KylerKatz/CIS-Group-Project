<?php

header('Content-Type: application/json');
$connection = oci_connect($username = '',
                            $password = '',
                            $connection_string = '//oracle.cise.ufl.edu/orcl');

?>