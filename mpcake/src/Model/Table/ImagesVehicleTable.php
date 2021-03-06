<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImagesVehicle Model
 *
 * @property \App\Model\Table\VehiclesTable|\Cake\ORM\Association\BelongsTo $Vehicles
 *
 * @method \App\Model\Entity\ImagesVehicle get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImagesVehicle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImagesVehicle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagesVehicle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImagesVehicle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImagesVehicle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagesVehicle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagesVehicleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('images_vehicle');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Vehicles', [
            'foreignKey' => 'vehicle_id',
            'joinType' => 'INNER'
        ]);
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            // You can configure as many upload fields as possible,
            // where the pattern is `field` => `config`
            //
            // Keep in mind that while this plugin does not have any limits in terms of
            // number of files uploaded per request, you should keep this down in order
            // to decrease the ability of your users to block other requests.
            'image' => [
                'nameCallback' => function ($data, $settings) {
                    #var_dump($data);
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    return strtolower(md5($data['name'] . time()) . '.' . $extension);
                },
                'transformer' =>  function ($table, $entity, $data, $field, $settings) {
                    var_dump($data);
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
                    $image = new \Gumlet\ImageResize($data['tmp_name']);
                    //$image = new ImageResize($data['tmp_name']);
                    $image->resizeToWidth(480);
                    $image->crop(480, 260);
                    $image->save($tmp);
                  //  $size = new \Imagine\Image\Box(500, 450);
                    /*$size = new \Imagine\Image\Box(480, 260);
                    $mode = \Imagine\Image\ImageInterface::RESIZE_UNDEFINED;
                    $imagine = new \Imagine\Gd\Imagine();
                    $imagine->open($data['tmp_name'])
                        ->resize($size, $mode)
                       // ->crop(new \Imagine\Image\Point(0, 0), new \Imagine\Image\Box(500, 450))
                        ->crop(new \Imagine\Image\Point(0, 0), $size)
                        ->save($tmp);

                    // Now return the original *and* the thumbnail
                    */
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'croped-' . $data['name'],
                    ];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'croped-' . $entity->{$field}
                    ];
                },
                'keepFilesOnDelete' => false
            ]
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator->provider('upload', \Josegonzalez\Upload\Validation\ImageValidation::class);
        
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator->allowEmpty('image', true);

        $validator->add('image', 'fileAboveMinHeight', [
            'rule' => ['isAboveMinHeight', 260],
            'message' => 'There was no file found to upload',
            'provider' => 'upload',
            /*'on' => function($context) {
                return !empty($context['data']['image']) && $context['data']['image']['error'] == UPLOAD_ERR_OK;
            }*/
        ])
        ->requirePresence('image', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['vehicle_id'], 'Vehicles'));

        return $rules;
    }
}
