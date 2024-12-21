<?php

use App\Models\RolePermissionModel;

/**
 * Check if a user has permission for a specific action.
 *
 * @param int $roleId The ID of the user's role.
 * @param string $action The action to check (create, read, update, delete).
 * @return bool True if the user has permission for the action, false otherwise.
 */
function has_permission($roleId, $action)
{
    // Validate the action
    $validActions = ['create', 'read', 'update', 'delete'];
    if (!in_array($action, $validActions)) {
        return false;
    }

    $permissionModel = new RolePermissionModel();
    $permission = $permissionModel->where('role_id', $roleId)->first();

    if ($permission && isset($permission['can_' . $action])) {
        return (bool) $permission['can_' . $action];
    }

    return false;
}
