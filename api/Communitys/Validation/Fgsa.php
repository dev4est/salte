<?php/** * Created by PhpStorm. * User: user * Date: 24.06.18 * Time: 18:38 */namespace Communitys\Validation;use Phalcon\Validation;use Phalcon\Validation\Validator\Email;use Phalcon\Validation\Validator\PresenceOf;class Fgsa extends Validation{    public function initialize()    {        $this->add(            'surname',            new PresenceOf(                [                    'message' => 'The name is required',                ]            )        );        $this->add(            'email',            new PresenceOf(                [                    'message' => 'The e-mail is required',                ]            )        );        $this->add(            'email',            new Email(                [                    'message' => 'The e-mail is not valid',                ]            )        );    }}