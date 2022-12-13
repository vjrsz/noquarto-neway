<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    use HasFactory;
    
    protected $data_opc = [
        'step01' => [ '#', 'Square', 'L Shap', 'Free Form' ],
        'step02' => [ '#', 'Sim', 'Não'],
        'step03' => [ '#', 'Silver', 'Tahoe', 'Capri' ],
        'step04' => [ '#', 'Blue', 'Blue-Gray', 'Blue Purple' ],
        'step05' => [ '#', 'Light Blue', 'Blue', 'Charcoal' ],
        'step06' => [ '#', 'Tan', 'Gray', 'Brown' ],
    ];

    protected $fillable = [
        'name',
        'email',
        'state',
        'address',
        'number_phone',
        'date',
        'time',
        'data',
    ];

    public function format(){
        $data = json_decode($this->data);

        return $this->data_opc['step01'][$data->step01];
    }
    public function spa(){
        $data = json_decode($this->data);

        return $this->data_opc['step02'][$data->step02];
    }
    public function azulejo(){
        $data = json_decode($this->data);

        return $this->data_opc['step03'][$data->step03];
    }
    public function border(){
        $data = json_decode($this->data);

        return $this->data_opc['step04'][$data->step04];
    }
    public function deck(){
        $data = json_decode($this->data);

        return $this->data_opc['step05'][$data->step05];
    }
    public function plaster(){
        $data = json_decode($this->data);

        return $this->data_opc['step06'][$data->step06];
    }
}
