<?php

namespace App\Http\Resources\Item;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ShowItem extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
//            'name' => $this->name,
            'required' => $this->required,
            'images' => $this->images,
//            'isSold' => $this->isSold,
            'switcher' => $this->switch_id,
            'user' => Auth::id(),
//            'rateCount' => $this->rate->count(),
//            'rate' => $this,
        ];
    }
}
