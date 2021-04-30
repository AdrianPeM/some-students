<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'notification_type_id', 'content'
    ];

    // public static function returnDate($notification) {
    //     $timeAndDateArr = explode(" ", $notification->created_at);
    //     $date = $timeAndDateArr[0];
    //     $time = $timeAndDateArr[1];

    //     $datetime = strtotime($date);
    //     $datetime2 = strtotime($time);

    //     $appendedActualDate = date('Ymd');
    //     $appendedCreationDate = date('Ymd', $datetime);

    //     if(intval($appendedActualDate) > intval($appendedCreationDate)) {
    //         return $date;
    //     } else {
    //         if(intval(idate('H') != intval(idate('H', $datetime2)))) {
    //             $elapsedHours = self::getElapsedHours($datetime2,$notification);
    //             return 'Hace '.$elapsedHours.' horas';
    //         } else {
    //             if(intval(idate('i') != intval(idate('i', $datetime2)))) {
    //                 if(intval(idate('i') > intval(idate('i', $datetime2)))) {
    //                     $minuteDiff = intval(idate('i')) - intval(idate('i', $datetime2));
    //                     $elapsedMinutes = $minuteDiff;
    //                     DB::table('notifications')->where('user_id',auth()->id())->update(['elapsed_minutes' => $elapsedMinutes]);
    //                     return 'Hace '.$elapsedMinutes.' minutos';
    //                 } else if(intval(idate('i') < intval(idate('i', $datetime2)))) {
    //                     $elapsedHours = self::getElapsedHours($datetime2,$notification);
    //                     return 'Hace '.$elapsedHours.' horas';
    //                 }
    //             } else {
    //                 if(intval(idate('s') != intval(idate('s', $datetime2)))) {
    //                     if(intval(idate('s') > intval(idate('s', $datetime2)))) {
    //                         $secondsDiff = intval(idate('s')) - intval(idate('s', $datetime2));
    //                         $elapsedSeconds = $secondsDiff;
    //                         DB::table('notifications')->where('user_id',auth()->id())->update(['elapsed_seconds' => $elapsedSeconds]);
    //                         return 'Hace '.$elapsedSeconds.' segundos';
    //                     } else if(intval(idate('i') < intval(idate('i', $datetime2)))) {
    //                         if(intval(idate('i') > intval(idate('i', $datetime2)))) {
    //                             $minuteDiff = intval(idate('i')) - intval(idate('i', $datetime2));
    //                             $elapsedMinutes = $minuteDiff;
    //                             DB::table('notifications')->where('user_id',auth()->id())->update(['elapsed_minutes' => $elapsedMinutes]);
    //                             return 'Hace '.$elapsedMinutes.' minutos';
    //                         } else if(intval(idate('i') < intval(idate('i', $datetime2)))) {
    //                             $elapsedHours = self::getElapsedHours($datetime2,$notification);
    //                             return 'Hace '.$elapsedHours.' horas';
    //                         }
    //                     }
    //                 } else {
    //                     if(intval(idate('i') > intval(idate('i', $datetime2)))) {
    //                         $minuteDiff = intval(idate('i')) - intval(idate('i', $datetime2));
    //                         $elapsedMinutes = $minuteDiff;
    //                         DB::table('notifications')->where('user_id',auth()->id())->update(['elapsed_minutes' => $elapsedMinutes]);
    //                         return 'Hace '.$elapsedMinutes.' minutos';
    //                     } else if(intval(idate('i') < intval(idate('i', $datetime2)))) {
    //                         $elapsedHours = self::getElapsedHours($datetime2,$notification);
    //                         return 'Hace '.$elapsedHours.' horas';
    //                     }
    //                 }
    //             }
    //         }
    //     }
    // }

    // private static function getElapsedHours($datetime2,$notification) {
    //     if(intval(idate('H') > intval(idate('H', $datetime2)))) {
    //         $hourDiff = intval(idate('H')) - intval(idate('H', $datetime2));
    //         $elapsedHours = $hourDiff;
    //     } else if(intval(idate('H') < intval(idate('H', $datetime2)))) {
    //         //dd($notification->select('elapsed_hours')->get());
    //         $hourDiff = idate('H') + $notification->select('elapsed_hours')->get();
    //         $elapsedHours = $hourDiff;
    //     }
    //     DB::table('notifications')->where('user_id',auth()->id())->update(['elapsed_hours' => $elapsedHours]);
    //     return $elapsedHours;
    // }
}
