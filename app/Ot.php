<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Ot extends Model {

    protected $fillable = [
        'original_ot',
        'description',
        'type',
        'phone',
        'region',
        'request_at',
        'start_at',
        'duration',
        'finish_at',
        'requester_id',
        'observation',
        'group_id',
        'car_id',
        'driver_user_id',
        'report_id',
        'status'
    ];

    static $statuses = array(
        0 => '',
        1 => 'Asignada Interferencia',
        2 => 'Cancelada',
        3 => 'Cerrada',
        4 => 'Espera',
        5 => 'Espera ASR OT885',
        6 => 'Planificado'
    );
    static $typeDt = array(
        0 => '',
        1 => 'Atencion de Reclamos',
        2 => 'Benchmarking',
        3 => 'Interferencia',
        4 => 'Medicion Outdoor',
        5 => 'Medicion Indoor',
        6 => 'Medicion Indoor Mensual',
        7 => 'Medicion Indoor Periodica',
        8 => 'Medicion Outdoor Periodica',
        9 => 'Prueba Estacionaria',
        10 =>'Reclamo',
        11 =>'Rutas Principales',
        12 =>'Walk Test'
    );

}
