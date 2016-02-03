<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

    protected $fillable = ['user_id', 'type', 'status', 'observations', 'report_at'];

    protected $typeses = array(
        1 => 'DT',
        2 => 'ASR',
        3 => 'BCH'

    );
    static $statuses = array(
        0 => 'Seleccione',
        1 => 'En Proceso',
        2 => 'Enviado',
        3 => 'N/A',
        4 => 'Pendiente'
    );
}
