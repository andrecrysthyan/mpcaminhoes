<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity
 *
 * @property int $id
 * @property string $name
 * @property float $value
 * @property string $brand
 * @property string $model
 * @property int $year
 * @property string $details
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\ImagesVehicle[] $images_vehicle
 */
class Vehicle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'value' => true,
        'brand' => true,
        'model' => true,
        'year' => true,
        'promotion' => true,
        'image' => true,
        'details' => true,
        'category_id' => true,
        'marca_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'images_vehicle' => true
    ];
}
