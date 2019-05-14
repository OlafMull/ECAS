<?php
/**
 * Created by PhpStorm.
 * User: dirk
 * Date: 2019-04-18
 * Time: 2:50 PM
 */

namespace App\Dynamics;

class Assignment extends DynamicsRepository
{
    public static $table = 'educ_assignments';

    public static $primary_key = 'educ_assignmentid';

    const APPLIED_STATUS = 'Applied';
    const ACCEPTED_STATUS = 'Accepted';
    const DECLINED_STATUS = 'Declined';

    public static $fields = [
        'id'             => 'educ_assignmentid',
        'session_id'     => '_educ_session_value',
        'user_id'        => '_educ_contact_value',
        'role_id'        => '_educ_role_value',
        'contract_stage' => 'educ_contractstage',
        'status'         => 'statuscode'
    ];

    public static $links = [
        'session_id' => Session::class,
        'user_id'    => Profile::class,
        'role_id'    => Role::class,
        'status'     => AssignmentStatus::class
    ];
}