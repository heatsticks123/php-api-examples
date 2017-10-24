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

// Connection API \ List all connections
// http://docs.oneall.com/api/resources/connections/list-all-connections/

// The page to retrieve
$page = 1;

// Entries per page
$entries_per_page = 5;

// Newest first
$order_direction = 'desc';

$connectionApi = new \Oneall\Api\Apis\Connection($client);
$pagination    = new \Oneall\Api\Pagination($page, $entries_per_page, $order_direction);
$response      = $connectionApi->getAll($pagination);

displayResponse($response);
