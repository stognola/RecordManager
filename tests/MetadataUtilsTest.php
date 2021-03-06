<?php
/**
 * MetadataUtils tests
 *
 * PHP version 5
 *
 * Copyright (C) The National Library of Finland 2015
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category DataManagement
 * @package  RecordManager
 * @author   Ere Maijala <ere.maijala@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://github.com/KDK-Alli/RecordManager
 */
require_once 'classes/MetadataUtils.php';

/**
 * MetadataUtils tests
 *
 * @category DataManagement
 * @package  RecordManager
 * @author   Ere Maijala <ere.maijala@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://github.com/KDK-Alli/RecordManager
 */
class MetadataUtilsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests for createSortableString
     *
     * @return void
     */
    public function testCreateSortableString()
    {
        $this->assertEquals(
            'A 3123', MetadataUtils::createSortableString('A 123')
        );
        $this->assertEquals(
            'A 3123 18 ABC', MetadataUtils::createSortableString('A 123 8 abc')
        );
        $this->assertEquals(
            'A 11 12', MetadataUtils::createSortableString('A  1   2')
        );
    }
}
