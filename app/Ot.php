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

    static $statusesDt = array(
        0 => '',
        1 => 'Asignada Interferencia',
        2 => 'Cancelada',
        3 => 'Cerrada',
        4 => 'Espera',
        5 => 'Planificado',
        6 => 'En Ejecución'
    );
    static $statusesAsr = array(
        0 => '',
        1 => 'Cancelado',
        2 => 'Cerrado',
        3 => 'Ejecutado',
        4 => 'Espera Confirmacion',
        5 => 'Gestion Permiso',
        6 => 'No Ejecutado',
        7 => 'Planificado',
        8 => 'Suspendido'
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
    static $typeAsr = array(
        0=>'',
        1=>'Auditoria'
    );

    static function getDuration($inicio, $fin){
        $inicio = explode('-',$inicio);
        $fin = explode('-',$fin);
        return $fin[2] - $inicio[2];
    }

}
