<?php

/**
 * This file is part of coisa/validation.
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 *
 * @link      https://github.com/coisa/validation
 * @copyright Copyright (c) 2020 Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace CoiSA\Validation;

/**
 * Interface ValidatorInterface.
 *
 * @package CoiSA\Validation
 */
interface ValidatorInterface
{
    /**
     * @param mixed $input
     *
     * @throws Exception\ValidationExceptionInterface
     *
     * @return void
     */
    public function validate($input): void;
}
