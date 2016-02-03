<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Rule\IsUnique;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', "Un nom d'utilisateur est nécessaire")
            ->notEmpty('email', 'Un mot de passe est nécessaire')
            ->notEmpty('password', 'Un mot de passe est nécessaire')
            ->notEmpty('role', 'Un role est nécessaire')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Merci de rentrer un role valide'
            ])
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => "L'email doit être valide"
            ])
            ->add('email', ['unique' => [
            'rule' => 'validateUnique', 
            'provider' => 'table', 
            'message' => 'Email déja utilisé']
            ])
            ->add('username', ['unique' => [
            'rule' => 'validateUnique', 
            'provider' => 'table', 
            'message' => 'Username déja utilisé']
        ]);
    }
}