<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  

class Payment extends Model  
{  
    use HasFactory;  

 
    protected $fillable = ['method', 'status', 'order', 'id'];  

    public function getMethod():String{
        return $this -> attributes['method'];
    }

    public function setMethod(String $payment_method){
        $this -> attributes['method'];
    }

    public function getStatus():String{
        return $this -> attributes['status'];
    }

    public function setStatus(String $payment_method){
        $this -> attributes['status'];
    }

    public function getOrder():String{
        return $this -> attributes['order'];
    }

    public function setOrder(String $payment_method){
        $this -> attributes['order'];
    }

    public function getId():String{
        return $this -> attributes['id'];
    }

    public function setId(String $payment_method){
        $this -> attributes['id'];
    }
}