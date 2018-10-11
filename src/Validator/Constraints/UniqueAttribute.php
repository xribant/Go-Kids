<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

/**
 * @Annotation
 */

class UniqueAttribute extends Constraint
{
    public $message = '%property% "%string%" est déjà utilisé.';
    public $repository;
    public $property;

    public function __construct($options = null)
    {
        parent::__construct($options);
        if (null === $this->repository || null === $this->property) {
            throw new MissingOptionsException(sprintf('The options "repository" and "property" must be given for constraint %s', __CLASS__), array('repository', 'property'));
        }
    }

    public function validatedBy()
    {
        return get_class($this).'Validator';
    }
}