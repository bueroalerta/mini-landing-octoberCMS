<?php namespace Eyarij\Landing\Components;

use Cms\Classes\ComponentBase;
use Eyarij\Landing\Models\Subscriber;
use Illuminate\Support\Facades\Validator;
use ValidationException;
use October\Rain\Support\Facades\Flash;

class Subs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Subs Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    function onSubscriber(){
        $data = post();
        $rules = [
            'email' => 'required|email',
        ];
        $validation = Validator::make($data, $rules);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        $subscriber = new Subscriber();
        $subscriber->email = input('email');
        $subscriber->save();
        Flash::success('Subscribed!');

    }
}
