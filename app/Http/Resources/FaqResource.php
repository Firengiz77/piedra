<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App;

class FaqResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $lang = App::getlocale();
        if($lang == 'az'){
            return [
                "id" =>  $this->id ,
                "sual" =>  $this->sual_az ,
                "cavab" =>  $this->cavab_az ,
            ];
        }elseif($lang == 'ru'){
            return [
                "id" =>  $this->id ,
                "sual" =>  $this->sual_ru ,
                "cavab" =>  $this->cavab_ru ,
            ];
        }else{
            return [
                "id" =>  $this->id ,
                "sual" =>  $this->sual_en ,
                "cavab" =>  $this->cavab_en ,
            ];
        }

    }
}
