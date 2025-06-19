<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
class UserSingleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email'=> $this->email,
            'avatar'=> $this->avatar?Storage::url($this->avatar):null,
            'roles' => $this->getRoleName(),
            'role_name'=> $this->getRoleName()->first(),
            'student' => $this->when($this->hasRole('Student'),[
                'id' => $this->student?->id,
                'NIM' => $this->student?->NIM,
                'batch'=> $this->student?->batch,
                'semester'=>$this->student?->semester,
                'faculty'=>[
                    'id'=> $this->student?->faculty?->id,
                    'name'=>$this->student?->faculty?->name,
                ],
                    'major'=>[
                    'id'=> $this->student?->major?->id,
                    'name'=>$this->student?->major?->name,
                    ],
                      'studyprogram'=>[
                    'id'=> $this->student?->studyprogram?->id,
                    'name'=>$this->student?->studyprogram?->name,
                      ],
                         'groupfee'=>[
                    'id'=> $this->student?->groupfee?->id,
                    'name'=>$this->student?->groupfee?->name,
                     'amount'=>$this->student?->groupfee?->amount,
                         ],              
                        ]),
                        'lecturer'=>$this->when($this->hasRole('Lecturer'),[
                            'id'=> $this->lecturer?->id,
                            'NID'=> $this->lecturer?->NID,
                            'academic_title' => $this->lecturer?->academic_title,
                            'faculty'=> $this->lecturer?->faculty_id,
                            'major'=> $this->lecturer?->major_id,
                            'studyprogram' => $this->lecturer?->studyprogram_id,
                        ]),
                        'operator'=> $this->when($this->hasRole('Operator'),[
                            'id'=> $this->operator?->id,
                            'employee_number'=> $this->lecturer?->employee_number,
                            'faculty'=> $this->operator?->faculty_id,
                            'major'=> $this->operator?->major_id,
                        ]),
        ];
    }
}
