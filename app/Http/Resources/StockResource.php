<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $result =  [
            'quantity' => $this->quantity,
        ];
        // $result = $this->getAttributes($result);
        $attributes = json_decode($this->attributes);
        foreach ($attributes as $Stockattribute) {
            $attribute = Attribute::find($Stockattribute->attribute_id);
            $value = Value::find($Stockattribute->value_id);

            $result[$attribute->name] = $value->getTranslations('name');
        }
        return $result;
    }
}
