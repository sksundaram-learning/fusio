<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 * 
 * Copyright (C) 2015 Christoph Kappestein <k42b3.x@gmail.com>
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio\Backend\Schema;

use PSX\Data\SchemaAbstract;

/**
 * Connection
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-3.0
 * @link    http://fusio-project.org
 */
class Connection extends SchemaAbstract
{
	public function getDefinition()
	{
		$config = $this->getSchemaBuilder('config');
		$config->string('url');
		$config->string('type');
		$config->string('host');
		$config->string('username');
		$config->string('password');
		$config->string('database');

		$sb = $this->getSchemaBuilder('connection');
		$sb->integer('id');
		$sb->string('name');
		$sb->string('class');
		$sb->complexType($config->getProperty());

		return $sb->getProperty();
	}
}