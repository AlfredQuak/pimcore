<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model;

use Pimcore\Model\Exception\NotFoundException;

/**
 * @method \Pimcore\Model\GridConfigShare\Dao getDao()
 *
 * @internal
 */
class GridConfigShare extends AbstractModel
{
    /**
     * @var int
     */
    protected $gridConfigId;

    /**
     * @var int
     */
    protected $sharedWithUserId;

    /**
     * @param int $gridConfigId
     * @param int $sharedWithUserId
     *
     * @return GridConfigShare|null
     */
    public static function getByGridConfigAndSharedWithId($gridConfigId, $sharedWithUserId)
    {
        try {
            $share = new self();
            $share->getDao()->getByGridConfigAndSharedWithId($gridConfigId, $sharedWithUserId);

            return $share;
        } catch (NotFoundException $e) {
            return null;
        }
    }

    /**
     * @throws \Exception
     */
    public function save()
    {
        $this->getDao()->save();
    }

    /**
     * Delete this share
     */
    public function delete()
    {
        $this->getDao()->delete();
    }

    /**
     * @return int
     */
    public function getGridConfigId(): int
    {
        return $this->gridConfigId;
    }

    /**
     * @param int $gridConfigId
     */
    public function setGridConfigId(int $gridConfigId)
    {
        $this->gridConfigId = $gridConfigId;
    }

    /**
     * @return int
     */
    public function getSharedWithUserId(): int
    {
        return $this->sharedWithUserId;
    }

    /**
     * @param int $sharedWithUserId
     */
    public function setSharedWithUserId(int $sharedWithUserId)
    {
        $this->sharedWithUserId = $sharedWithUserId;
    }
}
