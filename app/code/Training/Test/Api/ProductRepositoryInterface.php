<?php

namespace Training\Test\Api;

interface ProductRepositoryInterface
{
    public function get(array $skus);

    public function update(array $prices);

    public function delete(array $prices);
}
