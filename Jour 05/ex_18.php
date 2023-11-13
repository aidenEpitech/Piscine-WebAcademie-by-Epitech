<?php

function check_user_acl(array $user, string $permission)
{
	return in_array($permission, $user['permissions'], true);
}
