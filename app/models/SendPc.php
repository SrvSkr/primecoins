<?php 
class SendPc extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'send_pc';

	protected $fillable= array('sender_id','receiver_id' ,'amount','description');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

	// public static function toSelect2($id)
	// {
	// 	return self::select('id','name as text')->find($id);
	// }
}

 ?>