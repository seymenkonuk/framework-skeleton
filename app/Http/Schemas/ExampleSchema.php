<?php
// ============================================================================
// File:    ExampleSchema.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

namespace App\Http\Schemas;


use Seymenkonuk\Framework\Http\RequestSchema\ValidatorRequestSchema;
use Seymenkonuk\Validator\Validator\ObjectValidator;


class ExampleSchema extends ValidatorRequestSchema
{
    public function query(): ObjectValidator
    {
        return $this->validator->object()->schema([
            "test" => $this->validator->field()
                ->int(false)
                ->required(),
        ]);
    }
}
