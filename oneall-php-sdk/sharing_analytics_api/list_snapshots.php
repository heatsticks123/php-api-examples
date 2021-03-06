<?php

/**
 * @package      Oneall Api Example
 * @copyright    Copyright 2017-Present http://www.oneall.com
 * @license      GNU/GPL 2 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// HTTP Handler and Configuration
include __DIR__ . '/../../bootstrap.php';

// Sharing Analytics API \ List all snapshots
// http://docs.oneall.com/api/resources/sharing-analytics/list-all-snapshots/

//The page to retrieve
$page = 1;

//Entries per page
$entries_per_page = 100;

//Newest first
$order_direction = 'desc';

//Only retrieve snapshot for this user_token
$user_token = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';

//Only retrieve snapshot for this identity_token
$identity_token = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';

$api = new \Oneall\Api\Apis\Analytics($client);

// example with pagination and filters on user & identity
$pagination = new \Oneall\Api\Pagination($page, $entries_per_page, $order_direction);
//$response   = $api->getAll($pagination, $user_token, $identity_token);

// or example with default pagination data & no filter
$response = $api->getAll($pagination);

displayResponse($response);
