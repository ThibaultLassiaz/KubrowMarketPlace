<?php

namespace App\Services;

use App\Entity\Kubrow;

use function BenTools\CartesianProduct\cartesian_product;

class CombinaisonGenerationService {

    public function generateCombinaisons(array $data) {
        return cartesian_product($data);
    }
}
