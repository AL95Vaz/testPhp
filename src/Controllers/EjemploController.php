<?php

/**
 * This file is part of the Invo.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Invo\Controllers;

class EjemploController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();

        $this->tag->title()->set('Mi Ejemplo');
    }

    public function indexAction(): void
    {
    }
}
