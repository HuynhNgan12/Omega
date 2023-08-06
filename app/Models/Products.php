<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Products extends Model{
    public static function sumPricesByQuantities($products,$productsInSession)
    {
        $total=0;
        foreach($products as $product)
        {
            $total =$total + ($product->getPrice()*$productsInSession[$product->getId()]);
        }
        return $total;
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getId()
    {
        return $this->getAttribute('id');
    }
    public function setId($id)
    {
        $this->setAttribute('id', $id);
    }
    public function getIdSP(){
        return $this->attributes['IdSP'];
    }
    public function setIdSP($IdSP)
    {
        $this->attributes['IdSP'] = $IdSP;
    }
    public function getNameSP(){
        return $this->attributes['NameSP'];
    }
    public function setNameSP($NameSP)
    {
        $this->attributes['NameSP'] = $NameSP;
    }
    public function getPrice(){
        return $this->attributes['Price'];
    }
    public function setPrice($Price)
    {
        $this->attributes['Price'] = $Price;
    }
    public function getOldPrice(){
        return $this->attributes['OldPrice'];
    }
    public function setOldPrice($OldPrice)
    {
        $this->attributes['OldPrice'] = $OldPrice;
    }
    public function getImageSP(){
        return $this->attributes['ImageSP'];
    }
    public function setImageSP($ImageSP)
    {
        $this->attributes['ImageSP'] = $ImageSP;
    }
    public function getVideo(){
        return $this->attributes['Video'];
    }
    public function setVideo($Video)
    {
        $this->attributes['Video'] = $Video;
    } 
    public function getDescribe(){
        return $this->attributes['Describe'];
    }
    public function setDescribe($Describe)
    {
        $this->attributes['Describe'] = $Describe;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}