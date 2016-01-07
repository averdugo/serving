<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

    protected $fillable = ['user_id', 'type', 'status', 'observations', 'report_at'];

    protected $typeses = array(
        1 => 'DT',
        2 => 'ASR',
        3 => 'BCH'

    );
}
