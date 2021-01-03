<?php

namespace App\Http\Controllers;

use App\Patterns\AbstractFactory\GuiKitFactory;
use App\Patterns\Delegation\AppNotification;
use App\Patterns\EventChannel\EventChannelJob;
use App\Patterns\PropertyContainer\News;
use App\Patterns\Singleton\AdvancedSingleton;
use App\Patterns\Singleton\Interfaces\LaravelSingletonInterface;
use App\Patterns\Singleton\LaravelSingleton;

class PatternsController extends Controller
{
    public function propertyContainer()
    {
        $news = new News();
        $news->setTitle('Test news');
        $news->setDescription('Test description');
        $news->addProperty('count_comments', 52);

        dump($news->getProperty('count_comments'));

        ddd($news);
    }

    public function delegation()
    {
        $notification = new AppNotification();

        $notification->setMessage('Email message')->send();

        $notification->toSms()->setMessage('Sms message')->send();
    }

    public function eventChannel()
    {
        $event_channel_job = new EventChannelJob();
        $event_channel_job->run();
    }

    public function abstractFactory()
    {
        $gui_kit = (new GuiKitFactory())->getFactory();
        dump($gui_kit->gui());

        $gui_kit = (new GuiKitFactory())->getFactory('vuetify');
        dump($gui_kit->gui());
    }

    public function singleton()
    {
        $singleton = AdvancedSingleton::getInstance();
        $singleton->setTitle('test title');
        $singleton = AdvancedSingleton::getInstance();
        dump($singleton);

        $singleton = app(LaravelSingletonInterface::class);
        $singleton->setTitle('test laravel singleton title');
        dump($singleton);
        dump(app(LaravelSingletonInterface::class));
        $singleton_other = new LaravelSingleton();
        dump($singleton === $singleton_other);
    }
}
