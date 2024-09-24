<?php

namespace App\Http\Controllers;

use Spatie\TypeScriptTransformer\Actions\ReplaceSymbolsInCollectionAction;
use Spatie\TypeScriptTransformer\TypeScriptTransformer;
use Spatie\TypeScriptTransformer\TypeScriptTransformerConfig;

class TypeScriptTypesController extends Controller
{
    public function __invoke()
    {
        $config = app()->get(TypeScriptTransformerConfig::class);

        $transformer = new TypeScriptTransformer($config);
        $collection = $transformer->transform();

        $writer = $config->getWriter();

        (new ReplaceSymbolsInCollectionAction)->execute(
            $collection,
            $writer->replacesSymbolsWithFullyQualifiedIdentifiers()
        );

        return response($writer->format($collection), 200, ['Content-Type' => 'text/plain']);
    }
}
