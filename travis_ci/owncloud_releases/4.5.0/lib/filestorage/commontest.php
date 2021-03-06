<?php

/**
* ownCloud
*
* @author Robin Appelman
* @copyright 2012 Robin Appelman icewind@owncloud.com
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

/**
 * test implementation for OC_FileStorage_Common with OC_FileStorage_Local
 */

class OC_Filestorage_CommonTest extends OC_Filestorage_Common{
	/**
	 * underlying local storage used for missing functions
	 * @var OC_FileStorage_Local
	 */
	private $storage;

	public function __construct($params) {
		$this->storage=new OC_Filestorage_Local($params);
	}

	public function mkdir($path) {
		return $this->storage->mkdir($path);
	}
	public function rmdir($path) {
		return $this->storage->rmdir($path);
	}
	public function opendir($path) {
		return $this->storage->opendir($path);
	}
	public function stat($path) {
		return $this->storage->stat($path);
	}
	public function filetype($path) {
		return $this->storage->filetype($path);
	}
	public function isReadable($path) {
		return $this->storage->isReadable($path);
	}
	public function isUpdatable($path) {
		return $this->storage->isUpdatable($path);
	}
	public function file_exists($path) {
		return $this->storage->file_exists($path);
	}
	public function unlink($path) {
		return $this->storage->unlink($path);
	}
	public function fopen($path,$mode) {
		return $this->storage->fopen($path,$mode);
	}
	public function free_space($path) {
		return $this->storage->free_space($path);
	}
	public function touch($path, $mtime=null) {
		return $this->storage->touch($path,$mtime);
	}
}