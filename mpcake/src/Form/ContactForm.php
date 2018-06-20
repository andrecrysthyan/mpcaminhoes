<?php
// in src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

class ContactForm extends Form
{

protected function _buildSchema(Schema $schema)
{
return $schema->addField('nome', 'string')
->addField('email', ['type' => 'string'])
->addField('telefone', ['type' => 'string'])
->addField('mensagem', ['type' => 'text'])
;
}

protected function _buildValidator(Validator $validator)
{
return $validator->add('nome', 'length', [
'rule' => ['minLength', 10],
'message' => 'Please enter your name'
])->add('email', 'format', [
'rule' => 'email',
'message' => 'Please enter a valid email address',
])->add('mensagem', 'length', [
'rule' => ['minLength', 25],
'message' => 'Please enter your message text',
]);
}

protected function _execute(array $data)
{
/*$email = new Email();
$email->profile('default');

$email->from([$data['email']])
->to('contato@nuvemdesenvolvimentoweb.com.br')
->subject('Web Site Contact Form')
->send([$data['body']]);*/

return true;
}
}