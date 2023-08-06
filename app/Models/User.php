<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        
        ];
        protected $hidden = [
        'password',
        'remember_token',
        ];
        protected $casts = [
        'email_verified_at' => 'datetime',
        ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function getOrders()
    {
        return $this->orders;
    }
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }


    // product detail
    public function getId(){
        return $this->attributes['id'];
        }
        public function setId($id){
        $this->attributes['id'] = $id;
        }
        public function getName(){
        return $this->attributes['name'];
        }
        public function setName($name) {
        $this->attributes['name'] = $name;
        }
        public function getEmail(){
        return $this->attributes['email'];
        }
        public function setEmail($email){
        $this->attributes['email'] = $email;
        }
        public function getPassword(){
            return $this->attributes['password'];
            }
        public function setPassword($password){
            $this->attributes['password'] = $password;
            }
            public function getRole(){
            return $this->attributes['role'];
            }
            public function setRole($role){
            $this->attributes['role'] = $role;
            }
            // public function getBalance(){
            // return $this->attributes['balance'];
            // }
            // public function setBalance($balance){
            // $this->attributes['balance'] = $balance;
            // }
            
            public function getCreatedAt(){
                return $this->attributes['created_at'];
                }
                public function setCreatedAt($createdAt){
                $this->attributes['created_at'] = $createdAt;
                }
                public function getUpdatedAt(){
                return $this->attributes['updated_at'];
                }
                public function setUpdatedAt($updatedAt){
                $this->attributes['updated_at'] = $updatedAt;
                }
                
}
