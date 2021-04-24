<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'key', 'name', 'credits', 'semester', 'required', 'specialty_id', 'career_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function career(){
        return $this->belongsTo(Career::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function chains()
    {
        $chains = [];
        $chainsIds = $this
            ->join('subject_chain', 'subjects.id', 'subject_chain.subject_id')
            ->where('subjects.id', $this->id)->select('subject_chain.chain_id')->get();

        foreach($chainsIds as $idObj) {
            $chain = $this::where('id',$idObj->chain_id)
                ->select('id', 'name')
                ->first();

            array_push($chains, $chain);
        }

        return $chains;
    }

    public function pendantChains()
    {
        $chains = $this->chains();
        $pendantChains = [];

        if(count($chains) > 0) {
            foreach ($chains as $chain) {
                $subject = $this
                    ->join('subject_status', 'subjects.id', 'subject_status.subject_id')
                    ->where('user_id', auth()->id())
                    ->where('subject_id', $chain->id)->select('name','status')->first();

                if($subject && ($subject->status != 'completed')) {
                    array_push($pendantChains, $subject);
                }
            }
        }

        return $pendantChains;
    }

    public function updateStatus($status)
    {
        $subject = DB::table('subject_status')
            ->where('user_id',auth()->id())
            ->where('subject_id', $this->id)
            ->first();

        if($subject)
        {
            DB::table('subject_status')
                ->where('user_id', auth()->id())
                ->where('subject_id', $this->id)
                ->update(
                    ['status' => $status]
            );
        }
    }

    // public function updateCounter($counter)
    // {
    //     DB::table('subject_status')->where('user_id', auth()->id())->where('subject_id', $this->id)->update(['counter' => $counter]);
    // }

    public function status()
    {
        $subject = DB::table('subject_status')->where('user_id',auth()->id())->where('subject_id', $this->id)->select('status','counter')->first();
        if($subject)
        {
            return $subject;
        }
        $subject = new \stdClass();
        $subject->status = 'blocked';
        $subject->counter = 1;
        return $subject;
    }
}
