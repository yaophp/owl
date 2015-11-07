<?php
namespace Owl\DataMapper\Type;

class String extends \Owl\DataMapper\Type\Mixed {
    public function normalize($value, array $attribute) {
        return $this->isNull($value) ? null : (string)$value;
    }
}
