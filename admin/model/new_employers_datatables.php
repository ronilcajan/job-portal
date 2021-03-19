<?php
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'registrants';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 
        'db' => 'name', 
        'dt' => 0, 
        'formatter' => function($d, $row){
            return ucwords($d);
        }
    ),

    array( 
        'db' => 'email', 
        'dt' => 1,
        'formatter' => function($d, $row){
            return '<a href="mailto:" >'.$d.'</a>';
        }
    ),
    array( 
        'db' => 'status',   
        'dt' => 2,
        'formatter' => function( $d, $row ) {
            return '<span class="badge badge-primary">New</span>';
            
        }
    ),
    array( 
        'db' => 'file1',   
        'dt' => 3,
        'formatter' => function( $d, $row ) {
            return '<a target="_blank" class="text-danger" href="../../uploads/employer_files/'.$d.'" download><i class="fa fa-file"></i></a>';
            
        }
    ),
    array( 
        'db' => 'file2',   
        'dt' => 4,
        'formatter' => function( $d, $row ) {
            return '<a target="_blank" class="text-danger" href="../../uploads/employer_files/'.$d.'" download><i class="fa fa-file"></i></a>';
            
        }
    ),
    array( 
        'db' => 'file3',   
        'dt' => 5,
        'formatter' => function( $d, $row ) {
            return '<a target="_blank" class="text-danger" href="../../uploads/employer_files/'.$d.'" download><i class="fa fa-file"></i></a>';
            
        }
    ),
    array( 
        'db' => 'file4',   
        'dt' => 6,
        'formatter' => function( $d, $row ) {
            return '<a target="_blank" class="text-danger" href="../../uploads/employer_files/'.$d.'" download><i class="fa fa-file"></i></a>';
            
        }
    ),
    array( 
        'db' => 'id',
        'dt' => 7, 
        'formatter' => function( $d, $row ) {
            return '
            <a type="button" href="../model/approved_employer.php?id='.$d.'" class="btn btn-link text-success"><span class=""><i class="fa fa-check"></i></span> Approve</a> |
            <a type="button" href="../model/removed_employer.php?id='.$d.'" class="btn btn-link remove_applicant text-danger"><span class=""><i class="fa fa-minus-circle"></i> </span> Remove</a>
            ';
        }
    ),

);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'agency',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
$joinQuery = null;
// $extraCondition = "`id_client`=".$ID_CLIENT_VALUE;
$where = 'registrants.user_type="employer" AND registrants.status=0';

require( '../assets/plugins/datatables/ssp.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $where)
);
